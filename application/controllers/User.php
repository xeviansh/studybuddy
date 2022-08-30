<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

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
		$this->load->model('User_Model');
		$this->load->model('common_list');		
	}


	public function index()
	{
		$data['main_content'] = 'users/dashboard';
		$this->load->view('users/template/template',$data);
	}	
	
	
	public function user_login()
	{
		
	 		if($this->session->userdata("is_user_login") == TRUE) {
				redirect('dashboard');
			}
			
			$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if($this->form_validation->run() === FALSE){

			}else{
				// get username and Encrypt Password
 				$email = $this->input->post('email');
				$encrypt_password = md5($this->input->post('password'));

				$user_detail = $this->User_Model->login($email, $encrypt_password);
			
				//print_r($user_detail); die;
				if (count($user_detail) > 0) {
					//Create Session
					$user_data = array(
								'full_user_detail' => $user_detail,
								'user_id' => $user_detail[0]->ID,
				 				'email' => $user_detail[0]->email,
				 				'role' => $user_detail[0]->role,
				 				'user_img' => $user_detail[0]->user_img,
								'username' => $user_detail[0]->name . ' ' . $user_detail[0]->lastname,
				 				'is_user_login' => true
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
					$this->session->set_flashdata('success_notice', 'You are now logged in.');
					redirect('dashboard'); 
				}
				else{
					$this->session->set_flashdata('danger_notice', 'Login is invalid.');
					redirect('login');
				} 
				
			}  
			
			
			
		$this->load->view('users/template/header');
		$this->load->view('users/login');
		$this->load->view('users/template/footer');
	}


	public function user_register()
	{
	 		if($this->session->userdata("is_user_login") == TRUE) {
				redirect('dashboard');
			}
			if($this->input->post()){
 			$data['title'] = 'Sign Up';
			$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');
			$this->form_validation->set_rules('fname', 'First name', 'required');
			$this->form_validation->set_rules('lname', 'Last name', 'required');
			//$this->form_validation->set_rules('selectionrole', 'Role', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_check_email_exists');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('confirm_password', 'Confirm password', 'matches[password]');
			$this->form_validation->set_rules('terms', 'Terms', 'callback_accept_terms');

			if($this->form_validation->run() === FALSE){
				//$this->load->view('register', $data);
			} 
			else{
				//Encrypt Password
				$encrypt_password = md5($this->input->post('password'));
				$userdata = array(
					'fname' => $this->input->post('fname'), 
					'lname' => $this->input->post('lname'),
					'email' => $this->input->post('email'),
					'password' => $encrypt_password,
					'role' => 'student',
					'status' => '1',
					'student_userId' => 'stbdy_'.rand(1, 1000000),
					'last_login_ip' => $this->input->ip_address(),
					'attempt' => 3
					);
						  	  
				$registerd_user = $this->User_Model->register($userdata);
				if($registerd_user){
					$to_email = $this->input->post('email');
					$password = $this->input->post('password');
					$message = 'You has been registered Successfully.<br> '. base_url() .'login <br> emails => '.$to_email.'<br> Password => '.$password;
					$this->send_mail($to_email,$message);
					//Set Message
					$this->session->set_flashdata('success_notice', 'You are successfully registered');
					redirect('login');
				}
			}


			
			}  
			
		$this->load->view('users/template/header');
		$this->load->view('users/register');
		$this->load->view('users/template/footer');
	}


	public function edit_student_profile()
	{
	 		if($this->session->userdata("is_user_login") == FALSE) {
				redirect('login');
			}
			$sameurl = $this->uri->uri_string();
			$user_id = $this->session->userdata("user_id");
			$result = $this->User_Model->single_user($user_id);
			$result = $result[0];
			if(isset($_POST['updateprofile'])){

			$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');
			$this->form_validation->set_rules('fname', 'First name', 'required');
			$this->form_validation->set_rules('lname', 'Last name', 'required');
			$this->form_validation->set_rules('phone', 'Phone', 'required');
			//$this->form_validation->set_rules('selectionrole', 'Role', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_is_unique_email');
			if($this->form_validation->run() === FALSE){
				//$this->load->view('register', $data);
			} 
			else{
				
				
				
				$formdata = array(
				'fname' => $this->input->post('fname'), 
				'lname' => $this->input->post('lname'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone')
				);
				
				
			
			if (!empty($_FILES['profile_img']['name']))
			{
			$config['upload_path']          = 'assets/images/profile_imgs';
            $config['allowed_types']        = 'gif|jpg|png';
			$config['encrypt_name'] = TRUE;
            $this->load->library('upload',$config);
			
			if ( ! $this->upload->do_upload('profile_img'))
			{
					$error = array('error' => $this->upload->display_errors());
					$error = $error['error'];
					$this->session->set_flashdata('danger_notice', $error);

			}
			else
			{

					$data = array('upload_data' => $this->upload->data());
					//echo 'FIle Uploaded Successfully';
					$file_name = $this->upload->data('file_name');
					$formdata['user_img'] = $file_name;
					
			}
			}
			
				//Encrypt Password
				$encrypt_password = md5($this->input->post('password'));
				$userdata = $formdata;
						  	  
				$registerd_user = $this->User_Model->update_user($user_id,$userdata);
				if($registerd_user==TRUE){
					$this->session->set_flashdata('success_notice', 'Your profile has been updated.');
					redirect($sameurl);
				}
			}


			
			}  
			
		$data['result'] = $result;	
		$data['main_content'] = 'users/student-profile';
		$this->load->view('users/template/template',$data);
		 

	}
	
	
			// Check Email exists
		public function is_unique_email($email){
			$user_id = $this->session->userdata('user_id');
			$this->form_validation->set_message('is_unique_email', 'This email is already registered.');

			if ($this->User_Model->is_unique_email($email,$user_id)) {
				return true;
			}else{
				return false;
			}
		} 
		
		
	
	
	public function check_email_exists($email){
		$this->form_validation->set_message('check_email_exists', 'This email is already registered.');

		if ($this->User_Model->check_email_exists($email)) {
			return true;
		}else{
			return false;
		}
	}


	function accept_terms($terms)
	{
		$this->form_validation->set_message('accept_terms', 'Please read and accept our terms and conditions.');
		//if (isset($_POST['accept_terms_checkbox']))
			if ($terms=='agree')
		{
			
			return true;
		}
		else
		{
			return false;
		}
	}

	
					// log user out
		public function logout(){
			// unset user data
			$this->load->library('session');
			$this->session->unset_userdata('is_user_login');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('role');
			$this->session->unset_userdata('username');
			$this->session->sess_destroy();
			//Set Message
			$this->session->set_flashdata('user_loggedout', 'You are logged out.');
			redirect(base_url('login'));
		}
		
	
	function user_dashboard(){	
		$data['main_content'] = 'users/dashboard';
		$this->load->view('users/template/template',$data);
	}
	
	
	
	/*=================================Forget Password=========================================*/	
	
	
	    public function forgot_send_mail($to_email,$message) {
			
			$config['protocol'] = 'sendmail';
			$config['mailpath'] = '/usr/sbin/sendmail';
			$config['charset'] = 'iso-8859-1';
			$config['wordwrap'] = TRUE;
			$this->email->initialize($config);

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
	
		public function forget_password($page = 'forget-password'){
			$data['title'] = ucfirst($page);
			$this->load->view('users/template/header');
			$this->load->view('users/forget-password');
			$this->load->view('users/template/footer'); 
		}
		
		public function random_number(){				
			$ran_num = rand(9999,99999);	
			return $ran_num;	
		}
		
				//forget password functions start
		public function forget_password_mail(){
			
		$email = $this->input->post('email');	
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="red_error">', '</div>');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|callback_email_exists'); 
		$error_array = array();
        if ($this->form_validation->run() == FALSE) { 
			
			
			$error_array['email_error'] = form_error('email');
        } 
        else { 
		 
		  		$result = $this->User_Model->get_email_data($email);	
				$per_id = $result[0]->ID;
				$random_number = $this->random_number();
		        $this->load->helper('cookie');
						
					$set_cookies = setcookie("optcode", $random_number, time() + (60 * 5)); //5min
					$set_user_id_cookies = setcookie("per_id", $per_id, time() + (60 * 5)); //5min
				if($set_cookies && $set_user_id_cookies){
					$message = $random_number.' OTP is valid for 5 min... ';
					$mail = $this->forgot_send_mail($email,$message);
					if($mail){
						$error_array['success'] = 'Check E-mail for OTP';
						$error_array['status'] = 1;
					}
				}
		 }
		 echo json_encode($error_array);    
 }


 //forget password functions start
		public function otp_verification(){
			
		$otp = $this->input->post('opt');	
		$this->load->library('form_validation'); 
		$error_array = array();
		if(!empty($_COOKIE['optcode'])){
        if ($_COOKIE['optcode'] != $otp) { 	
			$error_array['otp_error'] = 'Invalid Otp';
        } 
        else{ 	
			delete_cookie("optcode");
			delete_cookie("per_id");
			$error_array['status'] = 1;	
		}
		}
		else{
			$error_array['otp_error'] = 'Invalid Otp';
		}
		echo json_encode($error_array);    
		
		
		}







 public function change_otp_password(){	
		$pass = $this->input->post('pass');	
		$confirm_pass = $this->input->post('confirm_pass');	
		$encrypt_password = md5($pass);
		$user_id = $_COOKIE['per_id'];
		$error_array = array();
		if(empty($pass)){	
			$error_array['password_error'] = 'Password field is required';
		}
		elseif(empty($confirm_pass)){	
			$error_array['password_error'] = 'Confirm Password field is required';		
		}
		elseif($pass != $confirm_pass) { 	
			$error_array['password_error'] = 'Confirm Password is not matched';
        } 
        else { 
			$data = array(
			'password' => $encrypt_password
			);
			$this->User_Model->update_user($user_id,$data);
			$error_array['status'] = 1;
				
		}
		echo json_encode($error_array);    
 }
		// Check Email exists
		public function email_exists($email){
			$this->form_validation->set_message('email_exists', 'This email is not exits.');
			if ($this->User_Model->check_email_exists($email)) {
				return false;
			}
			else{	
				return true;
			}
		}
		
		
		
		
		
		
		
			
				//forget password functions start
		public function otp_login(){

			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$error_array = array();
			if($this->form_validation->run() === FALSE){
				$error_array['login_info'] = 'All field are required.';
			}else{
				// get username and Encrypt Password
 				$email = $this->input->post('email');
				$encrypt_password = md5($this->input->post('password'));
				$user_detail = $this->User_Model->login($email, $encrypt_password);
				//echo count($user_detail); exit;
				//print_r($user_detail); die;
				
					
				if (count($user_detail) > 0) {
					$user_id = $user_detail[0]->ID;
					//Create Session

					if($email == $user_detail[0]->email && $encrypt_password == $user_detail[0]->password){
						$random_number = 1234;//$this->random_number();
						$this->load->helper('cookie');

						$set_otp_user_id_cookies = setcookie("otp_user_id", $user_id, time() + (60 * 5)); //5min
						$set_cookies = setcookie("login_otp_code", $random_number, time() + (60 * 5)); //5min
						if($set_cookies && $set_otp_user_id_cookies){
							$message = $random_number.' OTP is valid for 5 min... ';
							//$mail = $this->forgot_send_mail($email,$message);
							if($message){					
								$error_array['success'] = 'Check E-mail for OTP';
								$error_array['status'] = 1;
								$error_array['set_otp_user_id_cookies'] = $set_otp_user_id_cookies;
								$error_array['set_cookies'] =$set_cookies;
								$error_array['random_number'] =$random_number;

							}
						}	
					}else{
						$attempt = $user_detail[0]->attempt;
                  	    $attempt--;
						  $data = array(
									'attempt' => $attempt
						 		);
						if($attempt >= 0){
							$insert =  $this->common_list->update_data("users",$data,$user_detail[0]->ID); 
							if($attempt == 0){
								$svalue = array('status' => 3 ); 
								$error_array['login_info'] = 'Sorry ! your user id or password in incorrect. please contact admin person';
								$this->common_list->update_data("users",$svalue,$user_detail[0]->ID);

							}else{
								$error_array['login_info'] = 'You have '. $attempt. ' attempt left';
							}
							
						}		 
					

					}
					
					//Set Message
					//$this->session->set_flashdata('success_notice', 'You are now logged in.');
					//redirect('dashboard'); 
				}
				else{
					//$this->session->set_flashdata('danger_notice', 'Login is invalid.');
					$attempt = $this->session->userdata('attempt');
                    $attempt--;
                    $this->session->set_userdata('attempt', $attempt);

					$error_array['login_info'] = $attempt;
				} 
			} 
			echo json_encode($error_array);    
 }
 
 		public function login_otp_verification(){
			$this->load->helper('cookie');
			$otp = $this->input->post('opt');	
			$this->load->library('form_validation'); 
			$error_array = array();
			if(!empty($_COOKIE['login_otp_code']) && !empty($_COOKIE['otp_user_id'])){
			if ($_COOKIE['login_otp_code'] != $otp) { 	
				$error_array['otp_error'] = 'Invalid Otp';
			} 
			else{ 	
				$otp_user_id = $_COOKIE['otp_user_id'];
				$user_detail = $this->User_Model->single_user($otp_user_id);
				$user_id = $user_detail[0]->ID;
				$user_data = array(
					'full_user_detail' => $user_detail,
					'user_id' => $user_detail[0]->ID,
					'email' => $user_detail[0]->email,
					'role' => $user_detail[0]->role,
					'username' => $user_detail[0]->fname . ' ' . $user_detail[0]->lname,
					'is_user_login' => true
				);
			$this->session->set_userdata($user_data);
		if($this->session->userdata("is_user_login") == TRUE) {

			// delete cookie
			$cookie1 = array(
				'name'   => 'login_otp_code'
				);
				$cookie2 = array(
				'name'   => 'otp_error'
				); 
				delete_cookie($cookie1);
				delete_cookie($cookie2);
				$error_array['status'] = 1;	
				$error_array['url'] = base_url() . 'dashboard';	
			}
			else{
				$error_array['otp_error'] = 'Server Error';
			}
		}
		}
		else{
			$error_array['otp_error'] = 'Invalid Otp';
		}
		echo json_encode($error_array);    
		
		
		}

	}
?>

