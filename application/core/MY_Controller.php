<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller  extends CI_Controller  
{
	
	public $admindashbaord = "admin/dashboard";
	public $adminlogin = "main-admin";

	public $userdashbaord = "dashbaord";
	public $userlogin = "login";
	public $current_user;
		 
	public function __construct()
    {
        parent::__construct();
		$this->load->helper('my');
		$this->load->model('User_Model');
		if(!empty($this->session->userdata("user_id"))){
		$user_id = $this->session->userdata("user_id");
		$current_user = $this->User_Model->single_user($user_id);
		if(!empty($current_user)){
		$this->current_user = $current_user[0];
		}
		} 
	}   
       function is_admin_login(){
			 if($this->session->userdata("is_admin_login") == TRUE) {
				return true;
			} 
			else{
			//	$this->session->set_flashdata('danger_notice', 'You cannot access this page');			
				return false;
				
			}
		} 

		function is_user_login(){
			 if($this->session->userdata("is_user_login") == TRUE) {
				return true;
			} 
			else{
				$this->session->set_flashdata('danger_notice', 'You cannot access this page');
				return false;
			}
		}  
		
		
		
    public function send_mail($to_email,$message) {
        $from_email = "studybuddy@gmail.com";
       // $to_email = $this->input->post('email');
        //Load email library
        $this->load->library('email');
        $this->email->from($from_email, 'StudyBuddy');
        $this->email->to($to_email);
		 $this->email->set_mailtype("html");
        $this->email->subject('StudyBuddy');
        $this->email->message($message);
        //Send mail
        if($this->email->send()){
         //   $this->session->set_flashdata("email_sent","Congragulation Email Send Successfully.");
		return true;
		}
		else{
         //   $this->session->set_flashdata("email_sent","You have encountered an error");
       // $this->load->view('contact_email_form');
	   		return false;
		}
    }
} 

