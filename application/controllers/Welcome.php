<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends MY_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	public function homepage()
	{

		$this->load->view('front-end/home');
	}

	public function about_us()
	{
		
		$data['main_content'] = 'front-end/about';
		$this->load->view('front-end/template/template', $data);
		// $this->load->view('front-end/about');
	}
	public function course()
	{
	    	//ucfirst($page);
		$this->load->model('package_Model');
		$this->mini_contant_us();
		$package_list = $this->package_Model->package_list();
		$data['package_list'] = $package_list;
		$data['main_content'] = 'front-end/course';
		$this->load->view('front-end/template/template', $data);
	}

	public function whyus()
	{
		$data['main_content'] = 'front-end/whyus';
		$this->load->view('front-end/template/template', $data);
	}
	public function recentupdate()
	{
		$data['main_content'] = 'front-end/recentupdate';
		$this->load->view('front-end/template/template', $data);
	}
	public function faqs()
	{
		$data['main_content'] = 'front-end/faqs';
		$this->load->view('front-end/template/template', $data);
	}
	public function contact()
	{
		
		$data['main_content'] = 'front-end/contact';
		$this->load->view('front-end/template/template', $data);
	}

	public function index($page = 'home')
	{

		//ucfirst($page);
		$this->load->model('package_Model');
		$this->mini_contant_us();
		$package_list = $this->package_Model->package_list();
		$data['package_list'] = $package_list;
		$data['main_content'] = 'front-end/' . $page;
		$this->load->view('front-end/template/template', $data);
	}




	public function mini_contant_us()
	{

		$ddata['message'] = '';
		if (isset($_POST['contactus'])) {

			$this->load->model('Contact_Model');
			/* Load form helper */
			$this->load->helper(array('form'));
			/* Load form validation library */
			$this->load->library('form_validation');


			$this->form_validation->set_error_delimiters('<div class="invalid-feedback d-block">', '</div>');
			/* Set validation rule for name field in the form */
			$this->form_validation->set_rules('name', 'Name', 'required', array('required' => 'Name is required'));
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', array('required' => 'Email is required'));
			$this->form_validation->set_rules('phone', 'Phone no', 'trim|required', array('required' => 'Phone is required'));
			//$this->form_validation->set_rules('subject', 'subject', 'required'); 
			$this->form_validation->set_rules('message', 'Message', 'required', array('required' => 'Message is required'));

			if ($this->form_validation->run() == true) {

				$message = '<html><body>';
				$message .= '<img src="' . base_url() . 'assets/front-end/images/logo-wide.png" alt="Website Change Request" />';
				$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
				$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $this->input->post('name') . "</td></tr>";
				$message .= "<tr><td><strong>Email:</strong> </td><td>" . $this->input->post('email') . "</td></tr>";
				$message .= "<tr><td><strong>Type of Change:</strong> </td><td>" . $this->input->post('phone') . "</td></tr>";
				$message .= "<tr><td><strong>Message:</strong> </td><td>" . $this->input->post('message') . "</td></tr>";
				$message .= "</table>";
				$message .= "</body></html>";

				$this->sendmail($this->input->post('email'), $message);
			}
		}
	}

	public function common_send_msg()
	{
		$courseID = $this->db->query('select * from mange_package where id="' . $this->input->post('courseID') . '"')->row_array();


		$message = '<html><body>';
		$message .= '<img src="' . base_url() . 'assets/front-end/images/logo-wide.png" alt="Website Change Request" />';
		$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
		$message .= "<tr style='background: #eee;'><td><strong>Course Name:</strong> </td><td>" . $courseID['name'] . "</td></tr>";
		$message .= "<tr><td><strong>Email:</strong> </td><td>" . $this->input->post('email') . "</td></tr>";
		$message .= "<tr><td><strong>Message:</strong> </td><td>" . $this->input->post('message') . "</td></tr>";
		$message .= "</table>";
		$message .= "</body></html>";

		$this->sendmail($this->input->post('email'), $message);
	}



	function sendmail($from, $message)
	{

		$this->load->library('email');
		$this->email->from($from, 'StudyBuddy');
		$this->email->to('anup@vcanaglobal.com');
		//$this->email->cc('another@another-example.com');
		//$this->email->bcc('them@their-example.com');
		$this->email->subject('New Student Request Information');
		$this->email->mailtype = 'html';
		$this->email->message($message);
		$sendmail = $this->email->send();
		if ($sendmail) {
			return true;
			$this->session->set_flashdata('success', 'Your form has been submitted successfully.');
		} else {
			return false;
			$this->session->set_flashdata('danger', 'Server Error');
		}
	}



	public function showpages($page = false)
	{
		$data['main_content'] = 'front-end/' . $page;
		$this->load->view('front-end/template/template', $data);
	}
}
