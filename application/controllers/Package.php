<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model('common_list');
        $this->load->model('common_Model');		
	}

    public function index()
    {
        $data['title'] = 'Manage Package';   
        $data['instructor'] = $this->common_list->package_list('manage_instructor');
        $data['package_list'] =  $this->common_list->get_data('mange_package');	
        $data['main_content'] = 'main-admin/Package/package_list';
        $this->load->view('main-admin/template/template',$data);
    }

   
    public function edit($id=null)
    {
        $datas['title'] = 'Edit Package';   
        $package_info =  $this->common_Model->getDataby('mange_package',array("id"=>$id)); 
        $package_doc =  $this->common_list->get_data_uri('manage_syllabus_details','course_id',$id); 

        $datas['instructor'] = $this->common_list->package_list('manage_instructor');
        
        // $totalRows_document = $this->db->query('select count(*) as totalFile from manage_syllabus_details where course_id="'.$id.'"')->result_array();
        // $datas['totalRows'] = $totalRows_document;
        $datas['package_document'] = $package_doc;
        $datas['getValue']=$package_info==FALSE?FALSE:$package_info[0];
        $datas['main_content'] = 'main-admin/Package/add_package';
        $this->load->view('main-admin/template/template',$datas); 
    }

    

    public function delete()
    {
        $this->common_list->delete('mange_package', $this->uri->segment(3));	
        redirect(base_url().'package');        	
    }

    //package document delete

    public function docdelete()
    {
       $query =  $this->common_list->delete('manage_syllabus_details', $this->input->post('id'));	
        if($query){
            echo 1;
        }else{
            echo 2;
        }
    }

    function buy($id){ 
        echo $id;
    } 


    public function getRowInjson()
    {
        $query = $this->db->query('select *  from manage_syllabus_details where course_id="'.$this->input->post('id').'"')->result_array();

        echo json_encode($query);
    }

    public function addTopic($id)
    {
        $data['title'] = 'Add Topic';
        $topicName = $this->input->post('topic_name');
        $description = $this->input->post('description');

        $this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');
		$this->form_validation->set_rules('topic_name', 'Topic Name', 'trim|required');

        if ($this->form_validation->run() == TRUE){
            $data = array(
                'course_id' => $id,
                'topic_name' => $topicName,
                'description' => $description,
                'cip' => $this->input->ip_address(),
                'cby' => $this->session->userdata('user_id')
                ); 
          
            if (!empty($_FILES["image"]["name"])) {
                $extension= explode(".", $_FILES["image"]["name"])[1];
                $name= rand(1,999999).".".$extension;
                $tmp_name = $_FILES["image"]["tmp_name"];
                $error = $_FILES["image"]["error"];
                $path = 'uploads/topic/' . $name;
                move_uploaded_file($tmp_name, $path);
                $data['file'] = $name;
            } 
            
            $insert = $this->db->insert('manage_topic', $data);
            if(!empty($insert)){
                $this->session->set_flashdata('msg', 'Topic successfully add...');                
               redirect(base_url().'topic-list/'.$id); 
            }else{
                $this->session->set_flashdata('msg', 'some error occured. Please try again...');  
                redirect(base_url().'topic-list/'.$id);      
            }
        }           

        $data['main_content'] = 'main-admin/topic/add-topic';
        $this->load->view('main-admin/template/template',$data);  
    }

    public function topicList($id)
    {
        $data['title'] = 'Topic List';
        // $data['topicList'] = $this->common_list->get_data('manage_topic');

        $data['topicList'] = $this->common_list->gettbledata('manage_topic', 'course_id', $id);
        $data['main_content'] = 'main-admin/topic/topic-list';
        $this->load->view('main-admin/template/template',$data);   
    }

    public function topic_delete($id)
    {
        
        $this->common_list->delete('manage_topic', $id);
        redirect(base_url().'topic-list/'.$id);        
    }

    public function topic_edit($course_id, $id)
    {
        $data['title'] = 'Edit Topic';
        //echo $course_id.' '.$id; die;
        $topicName = $this->input->post('topic_name');
        $description = $this->input->post('description');

        $this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');
		$this->form_validation->set_rules('topic_name', 'Topic Name', 'trim|required');

        if ($this->form_validation->run() == TRUE){
            $data = array(
                'course_id' => $course_id,
                'topic_name' => $topicName,
                'description' => $description,
                'cip' => $this->input->ip_address(),
                'cby' => $this->session->userdata('user_id')
                ); 
          
            if (!empty($_FILES["image"]["name"])) {
                $extension= explode(".", $_FILES["image"]["name"])[1];
                $name= rand(1,999999).".".$extension;
                $tmp_name = $_FILES["image"]["tmp_name"];
                $error = $_FILES["image"]["error"];
                $path = 'uploads/topic/' . $name;
                move_uploaded_file($tmp_name, $path);
                $data['file'] = $name;
            } 
            $update =  $this->db->update('manage_topic', $data, array('id' => $id, 'course_id' => $course_id));
           // $update = $this->common_list->update_data("manage_topic", $data, $id);    
            
            if(!empty($update)){
                $this->session->set_flashdata('msg', 'Topic update successfully');                
               redirect(base_url().'topic-list/'.$course_id); 
            }else{
                $this->session->set_flashdata('msg', 'some error occured. Please try again...');  
                redirect(base_url().'topic-list/'.$course_id);      
            }
        }

           

        $data['getValue'] = $this->common_list->set_data('manage_topic',$id);
        $data['main_content'] = 'main-admin/topic/add-topic';
        $this->load->view('main-admin/template/template',$data); 
    }
}


/* End of file Package.php */


?>