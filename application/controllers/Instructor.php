<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Instructor extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('common_list');		
	}


    public function index(){
        $data['title'] = 'Manage Instructor';
        $data['instrctor_list'] =  $this->common_list->get_data('manage_instructor');	
        $data['main_content'] = 'main-admin/instructor/instructor_list';
        $this->load->view('main-admin/template/template',$data);
    }

    public function add(){
        $data['title'] = 'Add Instructor';
        $name = $this->input->post('name');
		$mobile = $this->input->post('mobile');
        $email = $this->input->post('email');
		$qualification = $this->input->post('qualification');
        $experience = $this->input->post('experience');
        $achievements = $this->input->post('achievements');

        $this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
       

        if ($this->form_validation->run() == TRUE)
		{				
            $data = array(
                        'name' => $name,
                        'mobile' => $mobile,
                        'email ' => $email,
                        'qualification ' => $qualification,
                        'experience' => $experience,  
                        'achievements' => $achievements,
                        'cip' => $this->input->ip_address(),
                        'cby' => 1,
                        'cdate' => date('Y-m-d H:i:s'),
                        'cstatus' => 1
                        );                        
                if (!empty($_FILES["image"]["name"])) {
                    $extension= end(explode(".", $_FILES["image"]["name"]));
	                $name= rand(1,999999).".".$extension;
                    $tmp_name = $_FILES["image"]["tmp_name"];
                    $error = $_FILES["image"]["error"];
                    $path = 'uploads/instructor_image/' . $name;
                    move_uploaded_file($tmp_name, $path);
                    $data['image'] = $name;
                }        

            $insert = $this->db->insert('manage_instructor', $data);
            if(!empty($insert)){
                $this->session->set_flashdata('msg', 'Instructor data successfully saved...');                
                redirect(base_url().'manage-instructor'); 
            }else{
                $this->session->set_flashdata('msg', 'some error occured. Please try again...');  
                redirect(base_url().'manage-instructor');      
            }


                
		}


        $data['main_content'] = 'main-admin/instructor/add_instructor';
        $this->load->view('main-admin/template/template',$data);

       
    }

    public function edit($id){
        $data['title'] = 'Edit Instructor';

		$data['getValue'] = $this->common_list->set_data('manage_instructor', $id);		
       $getdatas = $this->common_list->set_data('manage_instructor', $id);		

        $name = $this->input->post('name');
		$mobile = $this->input->post('mobile');
        $email = $this->input->post('email');
		$qualification = $this->input->post('qualification');
        $experience = $this->input->post('experience');
        $achievements = $this->input->post('achievements');
      

        $this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
       

        if ($this->form_validation->run() == TRUE)
		{				
            $data = array(
                        'name' => $name,
                        'mobile' => $mobile,
                        'email ' => $email,
                        'qualification ' => $qualification,
                        'experience' => $experience,    
                        'achievements' => $achievements,              
                        'cip' => $this->input->ip_address(),
                        'cby' => 1,
                        'cdate' => date('Y-m-d H:i:s'),
                        'cstatus' => 1
                        );                        
                if (!empty($_FILES["image"]["name"])) {
                    $extension= end(explode(".", $_FILES["image"]["name"]));
	                $name= rand(1,999999).".".$extension;
                   // $name = time() . '_' . $_FILES["image"]["name"];
                    $tmp_name = $_FILES["image"]["tmp_name"];
                    $error = $_FILES["image"]["error"];
                    $path = 'uploads/instructor_image/' . $name;
                    move_uploaded_file($tmp_name, $path);
                
                    if(!empty($name)){
                        unlink("uploads/instructor_image/".$getdatas['image']);	
                        $data['image'] = $name;
                    }else{
                        $data['image'] = $data['image'];
                    }
                }        
            $update = $this->common_list->update_data("manage_instructor", $data, $id);          
            if(!empty($update)){
                $this->session->set_flashdata('msg', 'Instructor update successfully saved...');                
                redirect(base_url().'manage-instructor'); 
            }else{
                $this->session->set_flashdata('msg', 'some error occured. Please try again...');  
                redirect(base_url().'manage-instructor');      
            }
		}
        $data['main_content'] = 'main-admin/instructor/add_instructor';
        $this->load->view('main-admin/template/template',$data);

       
    }

    public function delete()
    {
        $id = $this->uri->segment(3);
        $this->common_list->delete('manage_instructor', $id);
        redirect(base_url().'manage-instructor');        
    }
}

?>