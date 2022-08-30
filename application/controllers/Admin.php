<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends MY_Controller 
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
	 
	  public function __construct()

    {
        parent::__construct();
		$this->load->model('Admin_Model');
		
	

	}


	public function index()
	{
		/* $data['main_content'] = 'main-admin/dashboard';
		$this->load->view('main-admin/template/template',$data); */
	}	
	public function admin_login()
	{
	  		if($this->is_admin_login()) {
				redirect($this->admindashbaord);
			} 
			$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			if($this->form_validation->run() === FALSE){

			}else{
				// get username and Encrypt Password
 				$email = $this->input->post('email');
				$encrypt_password = md5($this->input->post('password'));

				$user_detail = $this->Admin_Model->login($email, $encrypt_password);
				//echo count($user_detail);
					//print_r($user_detail);
				if (count($user_detail) > 0) {
					//Create Session
					$user_data = array(
								'full_user_detail' => $user_detail,
								'user_id' => $user_detail[0]->ID,
				 				'email' => $user_detail[0]->email,
				 				'role' => $user_detail[0]->role,
								'username' => $user_detail[0]->name . ' ' . $user_detail[0]->lastname,
				 				'is_admin_login' => true
				 	);
 
				 	$set_session = $this->session->set_userdata($user_data);
				
					if($this->input->post("remember")=='remember') {
                      setcookie ("loginemail", $email, time()+ (10 * 365 * 24 * 60 * 60));  
                      setcookie ("loginPass", $this->input->post('password'),  time()+ (10 * 365 * 24 * 60 * 60));
                    } else {
                      setcookie ("loginemail",""); 
                      setcookie ("loginPass","");
                    }
					//Set Message
					$this->session->set_flashdata('success_notice', 'You are now logged in');
					redirect('admin/dashboard'); 
				}
				else{
					$this->session->set_flashdata('danger_notice', 'Login is invalid.');
					redirect(base_url().'main-admin');
				} 
				
			}  
		$this->load->view('main-admin/template/header');
		$this->load->view('main-admin/login');
		$this->load->view('main-admin/template/footer');
	}
	
	
	// log user out
	public function logout(){
		// unset user data
		$this->load->library('session');
		$this->session->unset_userdata('is_admin_login');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role');
		$this->session->unset_userdata('username');
		$this->session->sess_destroy();
		//Set Message
		$this->session->set_flashdata('user_loggedout', 'You are logged out.');
		redirect(base_url('main-admin'));
	}
		
	
	function admin_dashboard(){	
		if(!$this->is_admin_login()) {
			redirect($this->adminlogin);
		}
		$data['title'] = 'Dashboard';
		$data['student'] = $this->db->query('select count(*) as totalStudent from users where cstatus=1')->row_array();
		$data['course'] = $this->db->query('select count(*) as totalCourse from mange_package where cstatus=1')->row_array();
		$data['instructor'] = $this->db->query('select count(*) as totalinstructor from manage_instructor where cstatus=1')->row_array();
		$data['testDetails'] = $this->db->query('select count(*) as totaltest from manage_testdetails where cstatus=1')->row_array();
		$data['main_content'] = 'main-admin/dashboard';
		$this->load->view('main-admin/template/template',$data);
	}
}
