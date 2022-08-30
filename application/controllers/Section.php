<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class section extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model('common_list');		
	}


    public function index(){
        $data['title'] = 'Manage Section';
        $data['sectionList'] =  $this->common_list->get_data('manage_section');	
        $data['main_content'] = 'main-admin/section/manage_section';
        $this->load->view('main-admin/template/template',$data);
    }

    public function add()
    {
        $data['title'] = 'Add Section';
        $name = $this->input->post('name');
        $cstatus = $this->input->post('status');

        $this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
                
        if ($this->form_validation->run() == TRUE)
        {
            $data = array(
                'name' => $name,                
                'cip' => $this->input->ip_address(),
                'cby' => $this->session->userdata('user_id'),
                'cstatus' => $cstatus
            ); 
            
            $insert = $this->db->insert('manage_section', $data);
            if(!empty($insert)){
                $this->session->set_flashdata('msg', 'Section successfully saved...');                
                redirect(base_url().'section'); 
            }else{
                $this->session->set_flashdata('msg', 'some error occured. Please try again...');  
                redirect(base_url().'add-section');      
            }

        }

        $data['main_content'] = 'main-admin/section/add_section';
        $this->load->view('main-admin/template/template',$data);

    }

    public function edit($id)
    {
        $data['title'] = 'Edit Section';
        $name = $this->input->post('name');
        $cstatus = $this->input->post('status');

        $this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
                
        if ($this->form_validation->run() == TRUE)
        {
            $data = array(
                'name' => $name,                
                'cip' => $this->input->ip_address(),
                'cby' => $this->session->userdata('user_id'),
                'cstatus' => $cstatus
            );             
            $insert = $this->common_list->update_data("manage_section", $data, $id);      
            if(!empty($insert)){
                $this->session->set_flashdata('msg', 'Section successfully updated...');                
                redirect(base_url().'section'); 
            }else{
                $this->session->set_flashdata('msg', 'some error occured. Please try again...');  
                redirect(base_url().'add-section');      
            }

        }
        
        $data['getValue'] = $this->common_list->set_data('manage_section', $id);	
        $data['main_content'] = 'main-admin/section/add_section';
        $this->load->view('main-admin/template/template',$data);
    }

    public function delete($id)
    {
        $this->common_list->delete('manage_section', $id);
        redirect(base_url().'section'); 

    }
}

/* End of file Controllername.php */

?>