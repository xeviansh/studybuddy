<?php 
	class Contact extends CI_Controller{

		
    function __construct() {
        parent::__construct();
        $this->load->model('Contact_Model');
		/* Load form helper */ 
		$this->load->helper(array('form'));
		/* Load form validation library */ 
		$this->load->library('form_validation');
	}


		function sendmail($from,$message){
		
		$this->load->library('email');
		$this->email->from($from, 'StudyBuddy');
		$this->email->to('jaspreet@vcanaglobal.com');
		//$this->email->cc('another@another-example.com');
		//$this->email->bcc('them@their-example.com');
		$this->email->subject('Contact From StudyBuddy');
		$this->email->mailtype = 'html';
		$this->email->message($message);
		$sendmail = $this->email->send();
		if($sendmail){
			return true;
		}
		else{
			return false;
		}
	}	



		public function contact($page="contact"){
			
			if(!file_exists(APPPATH.'views/front-end/'.$page.'.php')) {
				show_404();
			}
			else
			{
				$ddata['message'] = '';
				if(isset($_POST['contactus'])){	
					
				$this->form_validation->set_error_delimiters('<div class="invalid-feedback d-block">', '</div>');
				 /* Set validation rule for name field in the form */ 
				 $this->form_validation->set_rules('name', 'Name', 'required', array('required' => 'Name is required'));
				 $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', array('required' => 'Email is required'));
				 $this->form_validation->set_rules('phone', 'Phone no', 'trim|required', array('required' => 'Phone Number is required'));
				 //$this->form_validation->set_rules('subject', 'subject', 'required'); 
				 $this->form_validation->set_rules('message', 'Message', 'required' , array('required' => 'Message is required'));
				
				 if ($this->form_validation->run() == FALSE) { 
					
				//	echo validation_errors();
					
				 } 
				 else{ 
					$name = $this->input->post('name');
					$phone_no = $this->input->post('phone');
					$email = $this->input->post('email');
					//$subject = $this->input->post('subject');
					$message = $this->input->post('message');
					$body_mess = 'Name => '.$name.'<br>Phone No. => '.$phone_no.'<br>Email => '.$email.'<br>Message => '.$message.'<br>' ;
					
					$data = array(
					'name' => $name,
					'phone' => $phone_no,
					'email' => $email,
					'message' => $message,
					'status' => 0
					);
					$res=$this->Contact_Model->saveEnquiry($data);
					if($res==true){
						$mail = $this->sendmail($email,$body_mess);
						$this->session->set_flashdata('success', 'Your form has been submitted successfully.');
					}else{					
						$this->session->set_flashdata('danger', 'Server Error');
					}
					
					}
				}
				
				
				$data['main_content'] = 'front-end/' . $page;
				$this->load->view('front-end/template/template',$data);
		
			}
		}
		
		
		
		
		 
		
		
	}