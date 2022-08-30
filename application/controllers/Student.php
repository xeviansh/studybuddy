<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model('common_list');
        $this->load->model('Admin_Model');		
	}

    public function index()
    {
        $data['title'] = 'Manage Student';
        $data['student_list'] =  $this->common_list->get_data('users');	
        $data['main_content'] = 'main-admin/Student/student_list';
        $this->load->view('main-admin/template/template',$data);
    }
    

    public function edit($id)
    {
        // $id = $this->uri->segment(3);	
        $data['title'] = 'Edit Student';
        $data['student_id'] = $id;
        $data['getValue'] = $this->common_list->set_data('users', $id);
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

        if($this->form_validation->run('student')){
            
            $data = array(
                'fname' => $this->input->post('fname'), 
				'lname' => $this->input->post('lname'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
                'status'=> $this->input->post('status')
            );
         
            if(!empty($this->input->post('password'))){
                $data['password'] =  md5($this->input->post('password'));
            }
            $update = $this->common_list->update_data("users", $data, $id);   
            if ($update) {			
				$this->session->set_flashdata('msg', 'Student update successfully');
				redirect(site_url() . 'manage-student','refresh');
			}else{
				$this->session->set_flashdata('msg', 'Some Error Occured Please try again...');
				redirect(site_url() . 'manage-student','refresh');
			}   
       }
        $data['main_content'] = 'main-admin/Student/add_student';
        $this->load->view('main-admin/template/template',$data);
   }


    public function delete()
    {
        $id = $this->uri->segment(3);
        $data = $this->common_list->set_data('users', $id);
        $data['status']='0';

         $update = $this->common_list->update_data("users", $data, $id);   
        // $this->common_list->delete('users', $id);
        redirect(base_url().'student');        
    }
    
    function check_email_avalibility()
    {
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            echo 1;
        } else {
            $this->load->model("Admin_Model");
            if ($this->Admin_Model->is_email_available_Admin($_POST["email"],$_POST["student_id"])) {
                echo 2;
            } else {
                echo 3;
            }
        }
    }

  
   


}
/* End of file Controllername.php */

?>