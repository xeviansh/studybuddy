<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_information extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model('common_list');	
        $this->load->model('common_Model');			
	}

    public function index()
    {
        $data['title'] = 'Test Details';
        $data['status'] = status();
        $data['question'] = questionType();
        $this->db->where("cstatus !=","0");
        $data['testlist'] =  $this->common_list->get_data('manage_testdetails');
        // $data['testlist'] = $this->common_list->get_data('manage_testdetails');
        $data['main_content'] = 'main-admin/test_details/test_list';
        $this->load->view('main-admin/template/template',$data);
    }



    public function add()
    {
        $data['title'] = 'Add Test Details';
       $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

        if($this->form_validation->run('test_details')){
            
            $data = array(
				// "unic_id" => $this->input->post('unic_id'),
				"course_id" => $this->input->post('course_id'),
				"test_name" => $this->input->post('test_name'),
				'test_type'=> $this->input->post('test_type'),
				'question_type'=> $this->input->post('question_type'),
				"start_date" => $this->input->post('start_date'),
				"end_date" => $this->input->post('end_date'),
                "total_question" => $this->input->post('total_question'),
                "total_mark" => $this->input->post('total_mark'),
                "each_question_mark" => $this->input->post('each_question_mark'),
                "negative_mark" => $this->input->post('negative_mark'),
                "timer" => $this->input->post('timer'),
                "interval_of_break" => $this->input->post('interval_of_break'),
                "time_of_break" => $this->input->post('time_of_break'),
                "amount" => $this->input->post('amount'),
				"cip" =>$this->input->ip_address(),
				"cby" => $this->session->userdata("user_id"),
				"cstatus" => $this->input->post('cstatus')
			);      
            $insert = $this->db->insert('manage_testdetails', $data); 
            if ($insert) {			
				$this->session->set_flashdata('msg', 'Test successfully add');
				redirect(site_url() . 'test-details','refresh');
			}else{
				$this->session->set_flashdata('msg', 'Some Error Occured Please try again...');
				redirect(site_url() . 'test-details','refresh');
			}   

        }
        
        $data['randomNumber'] = random_code(6);
        $data['status'] = status();
        $data['question'] = questionType();
        $data['testType'] = testType();
        $data['package'] = $this->common_list->package_list('mange_package');
        $data['main_content'] = 'main-admin/test_details/add_test_details';
        $this->load->view('main-admin/template/template',$data);
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Test Details';
        // $id = $this->uri->segment(3);
        $data['getValue'] = $this->common_list->set_data('manage_testdetails', $id);
    
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

        if($this->form_validation->run('test_details')){
            
            $data = array(
				"course_id" => $this->input->post('course_id'),
				"test_name" => $this->input->post('test_name'),
				'test_type'=> $this->input->post('test_type'),
				'question_type'=> $this->input->post('question_type'),
				"start_date" => $this->input->post('start_date'),
				"end_date" => $this->input->post('end_date'),
                "total_question" => $this->input->post('total_question'),
                "total_mark" => $this->input->post('total_mark'),
                "each_question_mark" => $this->input->post('each_question_mark'),
                "negative_mark" => $this->input->post('negative_mark'),
                "timer" => $this->input->post('timer'),
                "interval_of_break" => $this->input->post('interval_of_break'),
                "time_of_break" => $this->input->post('time_of_break'),
                "amount" => $this->input->post('amount'),
				"cip" =>$this->input->ip_address(),
				"cby" => $this->session->userdata("user_id"),
				"cstatus" => $this->input->post('cstatus')
			);   
            $update = $this->common_list->update_data("manage_testdetails", $data, $id);           
           
            if ($update) {			
				$this->session->set_flashdata('msg', 'Test update successfully');
				redirect(site_url() . 'test-details','refresh');
			}else{
				$this->session->set_flashdata('msg', 'Some Error Occured Please try again...');
				redirect(site_url() . 'test-details','refresh');
			}   

        }
        $data['randomNumber'] = random_code(6);
        $data['status'] = status();
        $data['question'] = questionType();
        $data['testType'] = testType();
        $data['package'] = $this->common_list->package_list('mange_package');
        $data['main_content'] = 'main-admin/test_details/add_test_details';
        $this->load->view('main-admin/template/template',$data);        
    }

    public function delete()
    {
        $id = $this->uri->segment(3);
        $data = $this->common_list->set_data('manage_testdetails', $id);
        $data['cstatus']='0';
        // $this->common_list->delete('manage_testdetails', $id);
        $update = $this->common_list->update_data("manage_testdetails", $data, $id);  
        redirect(base_url().'test-details');        
    }
  

    public function testSchedule($id)
    {
        $data['status'] = status();
        $data['question'] = questionType();
       // $data['testlist'] = $this->common_list->get_data_uri('manage_testdetails','course_id', $id);        
       $data['testlist'] = $this->common_list->testlist($this->session->userdata('user_id'), $id);
        $data['main_content'] = 'users/courses/test-schedule';
		$this->load->view('users/template/template',$data);      
    }
   
    public function testList($id)
    {  
        $data['title'] = 'Test List';
        $id=$data['id'] = $id;     
        $data['question_list'] =  $this->common_Model->getDataby("question_bank" ,array('test_id'=>$id));    
        $data['main_content'] = 'main-admin/question/question_list';
        $this->load->view('main-admin/template/template', $data);
    }

    public function addList($id)
    {
        $data['title'] = 'Add Question';
        $detailsData =  $this->common_list->set_data('manage_testdetails', $id);

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        if ($this->form_validation->run('question_bank')) {

            $data = array(
                "course_id" => $detailsData['course_id'],
                "test_id" => $detailsData['id'],
                "passage" => addslashes($this->input->post('passage')),
                'question' => addslashes($this->input->post('question')),
                "option1" => addslashes($this->input->post('option1')),
                "option2" => addslashes($this->input->post('option2')),
                "option3" => addslashes($this->input->post('option3')),
                "option4" => addslashes($this->input->post('option4')),
                "correct_answer" => addslashes($this->input->post('correct_answer')),
                "explanation" => addslashes($this->input->post('explanation')),
                "reference" => addslashes($this->input->post('reference')),
                "cip" => $this->input->ip_address(),
                "cby" => $this->session->userdata("user_id"),
                "cstatus" => $this->input->post('cstatus')
            );

            
            if (!empty($_FILES["passage_image"]["name"])) {
                $extension= end(explode(".", $_FILES["passage_image"]["name"]));
	            $name= 'passage_image'.rand(10,100000).".".$extension;
               // $name = time() . '_' . $_FILES["passage_image"]["name"];
                $tmp_name = $_FILES["passage_image"]["tmp_name"];
                $path = 'uploads/question_bank/' . $name;
                move_uploaded_file($tmp_name, $path);
                $data['passage_image'] =  $name;
            }
       
            if (!empty($_FILES["question_image"]["name"])) {
                $extension= end(explode(".", $_FILES["question_image"]["name"]));
	            $name= 'question_image'.rand(10,100000).".".$extension;
               // $name = time() . '_' . $_FILES["question_image"]["name"];
                $tmp_name = $_FILES["question_image"]["tmp_name"];
                $path = 'uploads/question_bank/' . $name;
                move_uploaded_file($tmp_name, $path);
                $data['question_image'] = $name;
            }

       
            if (!empty($_FILES["explanation_file"]["name"])) {
                $extension= end(explode(".", $_FILES["question_image"]["name"]));
	            $name= 'question_image'.rand(10,100000).".".$extension;
               // $name = time() . '_' . $_FILES["explanation_file"]["name"];
                $tmp_name = $_FILES["explanation_file"]["tmp_name"];
                $path = 'uploads/question_bank/' . $name;
                move_uploaded_file($tmp_name, $path);
                $data['explanation_file'] = $name;
            }

          
            $insert = $this->db->insert('question_bank', $data);
            if (!empty($insert)) {
                $this->session->set_flashdata('msg', 'Question successfully saved...');
                redirect(base_url() . 'question-list/' . $detailsData['id'] . '');
            } else {
                $this->session->set_flashdata('msg', 'some error occured. Please try again...');
                redirect(base_url() . 'question-list/' . $detailsData['id'] . '');
            }
        }
        $data['status'] = status();
          $this->db->where("cstatus !=","0");
        $data['getTestId'] = $this->common_list->set_data('manage_testdetails', $id);
        $data['main_content'] = 'main-admin/question/add_question';
        $this->load->view('main-admin/template/template', $data);
    }
    
    public function editQuestion($id){
        $questionlist=$data['question_list'] = $this->common_Model->getDataby("question_bank" ,array('id'=>$id));
        $courseInfo=$data['courseInfo'] =  $this->common_Model->getDataby("mange_package" ,array('id'=>$questionlist[0]['course_id']));
        $data['course_name']=$courseInfo[0]['name'];
        $detailsData =  $this->common_list->set_data('manage_testdetails', $id);
        $testInfo = $data['testInfo']= $this->common_Model->getDataby("manage_testdetails" ,array('id'=>$questionlist[0]['test_id']));
        $data['test_name']=$testInfo[0]['test_name'];
        
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        if ($this->form_validation->run('question_bank')) {

            $data = array(
                "course_id" => $this->input->post('course_id'),
                "test_id" => $this->input->post('test_id'),
                "passage" => addslashes($this->input->post('passage')),
                'question' => addslashes($this->input->post('question')),
                "option1" => addslashes($this->input->post('option1')),
                "option2" => addslashes($this->input->post('option2')),
                "option3" => addslashes($this->input->post('option3')),
                "option4" => addslashes($this->input->post('option4')),
                "correct_answer" => addslashes($this->input->post('correct_answer')),
                "explanation" => addslashes($this->input->post('explanation')),
                "reference" => addslashes($this->input->post('reference')),
                "cip" => $this->input->ip_address(),
                "cby" => $this->session->userdata("user_id"),
                "cstatus" => $this->input->post('cstatus')
            );

            
            if (!empty($_FILES["passage_image"]["name"])) {
                $extension= end(explode(".", $_FILES["passage_image"]["name"]));
	            $name= 'passage_image'.rand(10,100000).".".$extension;
               // $name = time() . '_' . $_FILES["passage_image"]["name"];
                $tmp_name = $_FILES["passage_image"]["tmp_name"];
                $path = 'uploads/question_bank/' . $name;
                move_uploaded_file($tmp_name, $path);
                $data['passage_image'] =  $name;
            }
       
            if (!empty($_FILES["question_image"]["name"])) {
                $extension= end(explode(".", $_FILES["question_image"]["name"]));
	            $name= 'question_image'.rand(10,100000).".".$extension;
               // $name = time() . '_' . $_FILES["question_image"]["name"];
                $tmp_name = $_FILES["question_image"]["tmp_name"];
                $path = 'uploads/question_bank/' . $name;
                move_uploaded_file($tmp_name, $path);
                $data['question_image'] = $name;
            }

       
            if (!empty($_FILES["explanation_file"]["name"])) {
                $extension= end(explode(".", $_FILES["explanation_file"]["name"]));
	            $name= 'explanation_file'.rand(10,100000).".".$extension;
               // $name = time() . '_' . $_FILES["explanation_file"]["name"];
                $tmp_name = $_FILES["explanation_file"]["tmp_name"];
                $path = 'uploads/question_bank/' . $name;
                move_uploaded_file($tmp_name, $path);
                $data['explanation_file'] = $name;
            }

            $update = $this->common_list->update_data("question_bank", $data, $id); 
         
            if (!empty($update)) {
                $this->session->set_flashdata('msg', 'Question successfully saved...');
                redirect(base_url() . 'question-list/'.  $this->input->post('test_id') . '');
            } else {
                $this->session->set_flashdata('msg', 'some error occured. Please try again...');
                redirect(base_url() . 'Test_information/editQuestion/' . $this->input->post('test_id'). '');
            }
        }
        $data['status'] = status();
        $data['main_content'] = 'main-admin/question/add_question';
        $this->load->view('main-admin/template/template', $data);
    }
 
     public function delete_question($id)
     {
     $dataId = $this->common_Model->getDataby("question_bank" ,array('id'=>$id));
    //   $id= $this->uri->segment(3);
      $data['cstatus']='0';

      $update = $this->common_list->update_data("question_bank", $data, $id);
     if($update){
        redirect(base_url(). 'question-list/'.$dataId[0]['test_id']);
       }
           
             
    }
}

/* End of file Controllername.php */

?>