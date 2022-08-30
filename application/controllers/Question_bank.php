<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Question_bank extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('common_list');
    }

    public function index()
    {
        $data['question_list'] =  $this->common_list->get_data('question_bank');
        $data['main_content'] = 'main-admin/question/question_details';
        $this->load->view('main-admin/template/template', $data);
    }

    public function add($id)
    {
        $detailsData =  $this->common_list->set_data('manage_testdetails', $id);

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        if ($this->form_validation->run('question_bank')) {

            $data = array(
                "course_id" => $detailsData['course_id'],
                "test_id" => $detailsData['id'],
                "passage" => $this->input->post('passage'),
                'question' => $this->input->post('question'),
                "option1" => $this->input->post('option1'),
                "option2" => $this->input->post('option2'),
                "option3" => $this->input->post('option3'),
                "option4" => $this->input->post('option4'),
                "correct_answer" => $this->input->post('correct_answer'),
                "mark" => $this->input->post('mark'),
                "negative_mark" => $this->input->post('negative_mark'),
                "explanation" => $this->input->post('explanation'),
                "reference" => $this->input->post('reference'),
                "expla_video" => $this->input->post('expla_video'),
                "cip" => $this->input->ip_address(),
                "cby" => $this->session->userdata("user_id"),
                "cstatus" => $this->input->post('cstatus')
            );

            if ($_FILES['passage_image']['name']) {
                if ($_FILES['passage_image']['name'] != '') {
                    $file_name = $_FILES['passage_image']['name'];
                    $file_tempname = $_FILES['passage_image']['tmp_name'];
                    $folder = "uploads/question_bank/";
                    $image_id = 'IMG' . "-" . rand(1000, 100000);
                    $image = upload_image($folder, $file_name, $file_tempname, $image_id);
                    if ($image) {
                        $data['passage_image'] = $image;
                    }
                }
            }

            if ($_FILES['question_image']['name']) {
                if ($_FILES['question_image']['name'] != '') {
                    $file_name = $_FILES['question_image']['name'];
                    $file_tempname = $_FILES['question_image']['tmp_name'];
                    $folder = "uploads/question_bank/";
                    $image_id = 'IMG' . "-" . rand(1000, 100000);
                    $image = upload_image($folder, $file_name, $file_tempname, $image_id);
                    if ($image) {
                        $data['question_image'] = $image;
                    }
                }
            }

            if ($_FILES['explanation_file']['name']) {
                if ($_FILES['explanation_file']['name'] != '') {
                    $file_name = $_FILES['explanation_file']['name'];
                    $file_tempname = $_FILES['explanation_file']['tmp_name'];
                    $folder = "uploads/question_bank/";
                    $image_id = 'IMG' . "-" . rand(1000, 100000);
                    $image = upload_image($folder, $file_name, $file_tempname, $image_id);
                    if ($image) {
                        $data['explanation_file'] = $image;
                    }
                }
            }

            

            $insert = $this->db->insert('question_bank', $data);
            if (!empty($insert)) {
                $this->session->set_flashdata('msg', 'Question successfully saved...');
                redirect(base_url() . 'question_bank/add/' . $detailsData['id'] . '');
            } else {
                $this->session->set_flashdata('msg', 'some error occured. Please try again...');
                redirect(base_url() . 'question_bank/add/' . $detailsData['id'] . '');
            }
        }
        $data['status'] = status();
        $data['getTestId'] = $this->common_list->set_data('manage_testdetails', $id);
        $data['main_content'] = 'main-admin/question/add_question';
        $this->load->view('main-admin/template/template', $data);
    }

    public function gettestInf()
    {
        $result =  $this->common_list->testDetails($this->input->post('testId'));
        echo json_encode($result);
    }

    public function delete()
    {
        $id = $this->uri->segment(3);
        $this->common_list->delete('question_bank', $id);
        redirect(base_url() . 'question_bank/index');
    }

   //=============new question lost============
   public function question_list($id = false)
   {
      
       if(!empty($id)){
        $data['title'] = 'Assign Question';   
        $getCourseName = $this->common_list->set_data('manage_testdetails', $id);      
        $data['question_list'] =  $this->common_list->get_data_uri('manage_quesion_hub','course_id',$getCourseName['course_id']); 
     
        $data['testId'] = $id; 
        $data['testdetails'] = $getCourseName;
       }else{
        $data['title'] = 'Question Hub';    
         $data['question_list'] =  $this->common_list->get_data('manage_quesion_hub'); 
       }
     
       $data['main_content'] = 'main-admin/question/questionList';
       $this->load->view('main-admin/template/template', $data);
   }

   public function questionSave()
   {    
        $data['title'] = 'Add Question';     
       $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

       if ($this->form_validation->run('question_bank')) {
           $data = array(
               "course_id" =>$this->input->post('course_id'),          
               "section_id" =>$this->input->post('section_id'),          
               "passage" => $this->input->post('passage'),
               'question' => $this->input->post('question'),
               "option1" => $this->input->post('option1'),
               "option2" => $this->input->post('option2'),
               "option3" => $this->input->post('option3'),
               "option4" => $this->input->post('option4'),
               "correct_answer" => $this->input->post('correct_answer'),           
               "explanation" => $this->input->post('explanation'),
               "expla_video" => $this->input->post('expla_video'),
               "reference" => $this->input->post('reference'),
               "cip" => $this->input->ip_address(),
               "cby" => $this->session->userdata("user_id"),
               "cstatus" => $this->input->post('cstatus')
           );

            if ($_FILES['passage_image']['name']) {
                if ($_FILES['passage_image']['name'] != '') {
                    $file_name = $_FILES['passage_image']['name'];
                    $file_tempname = $_FILES['passage_image']['tmp_name'];
                    $folder = "uploads/question_bank/";
                    $image_id = 'IMG' . "-" . rand(1000, 100000);
                    $image = upload_image($folder, $file_name, $file_tempname, $image_id);
                    if ($image) {
                        $data['passage_image'] = $image;
                    }
                }
            }

            if ($_FILES['question_image']['name']) {
                if ($_FILES['question_image']['name'] != '') {
                    $file_name = $_FILES['question_image']['name'];
                    $file_tempname = $_FILES['question_image']['tmp_name'];
                    $folder = "uploads/question_bank/";
                    $image_id = 'IMG' . "-" . rand(1000, 100000);
                    $image = upload_image($folder, $file_name, $file_tempname, $image_id);
                    if ($image) {
                        $data['question_image'] = $image;
                    }
                }
            }

            if ($_FILES['explanation_file']['name']) {
                if ($_FILES['explanation_file']['name'] != '') {
                    $file_name = $_FILES['explanation_file']['name'];
                    $file_tempname = $_FILES['explanation_file']['tmp_name'];
                    $folder = "uploads/question_bank/";
                    $image_id = 'IMG' . "-" . rand(1000, 100000);
                    $image = upload_image($folder, $file_name, $file_tempname, $image_id);
                    if ($image) {
                        $data['explanation_file'] = $image;
                    }
                }
            }
             $insert = $this->db->insert('manage_quesion_hub', $data);
            if (!empty($insert)) {
                $this->session->set_flashdata('msg', 'Question successfully saved...');
                redirect(base_url() . 'question-hub/');
            } else {
                $this->session->set_flashdata('msg', 'some error occured. Please try again...');
                redirect(base_url() . 'add-question-hub/');
            }
       }
        $data['status'] = status();
        $data['getCourseName'] =  $this->common_list->get_data('mange_package');    
        $data['getSectionName'] =  $this->common_list->get_data('manage_section');    
        $data['main_content'] = 'main-admin/question/questionAdd';
        $this->load->view('main-admin/template/template', $data);
   }

   public function questionhubEdit($id)
   {    
     $data['title'] = 'Edit Question';     
       $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

       if ($this->form_validation->run('question_bank')) {
         
           $data = array(
               "course_id" =>$this->input->post('course_id'),  
               "section_id" =>$this->input->post('section_id'),           
               "passage" => $this->input->post('passage'),
               'question' => $this->input->post('question'),
               "option1" => $this->input->post('option1'),
               "option2" => $this->input->post('option2'),
               "option3" => $this->input->post('option3'),
               "option4" => $this->input->post('option4'),
               "correct_answer" => $this->input->post('correct_answer'),        
               "explanation" => $this->input->post('explanation'),
               "expla_video" => $this->input->post('expla_video'),
               "reference" => $this->input->post('reference'),
               "cip" => $this->input->ip_address(),
               "cby" => $this->session->userdata("user_id"),
               "cstatus" => $this->input->post('cstatus')
           );

           if ($_FILES['passage_image']['name']) {
               if ($_FILES['passage_image']['name'] != '') {
                   $file_name = $_FILES['passage_image']['name'];
                   $file_tempname = $_FILES['passage_image']['tmp_name'];
                   $folder = "uploads/question_bank/";
                   $image_id = 'IMG' . "-" . rand(1000, 100000);
                   $image = upload_image($folder, $file_name, $file_tempname, $image_id);
                   if ($image) {
                       $data['passage_image'] = $image;
                   }
               }
           }

           if ($_FILES['question_image']['name']) {
               if ($_FILES['question_image']['name'] != '') {
                   $file_name = $_FILES['question_image']['name'];
                   $file_tempname = $_FILES['question_image']['tmp_name'];
                   $folder = "uploads/question_bank/";
                   $image_id = 'IMG' . "-" . rand(1000, 100000);
                   $image = upload_image($folder, $file_name, $file_tempname, $image_id);
                   if ($image) {
                       $data['question_image'] = $image;
                   }
               }
           }

           if ($_FILES['explanation_file']['name']) {
               if ($_FILES['explanation_file']['name'] != '') {
                   $file_name = $_FILES['explanation_file']['name'];
                   $file_tempname = $_FILES['explanation_file']['tmp_name'];
                   $folder = "uploads/question_bank/";
                   $image_id = 'IMG' . "-" . rand(1000, 100000);
                   $image = upload_image($folder, $file_name, $file_tempname, $image_id);
                   if ($image) {
                       $data['explanation_file'] = $image;
                   }
               }
           }

           $insert = $this->common_list->update_data("manage_quesion_hub", $data, $id);          
       
           if (!empty($insert)) {
               $this->session->set_flashdata('msg', 'Question successfully updated...');
               redirect(base_url() . 'question-hub');
           } else {
               $this->session->set_flashdata('msg', 'some error occured. Please try again...');
               redirect(base_url() . 'add-question-hub');
           }
       }


       $data['status'] = status();
       $data['getCourseName'] =  $this->common_list->get_data('mange_package');   
       $data['getSectionName'] =  $this->common_list->get_data('manage_section');   
       $data['details'] =  $this->common_list->set_data('manage_quesion_hub', $id);  

       $data['main_content'] = 'main-admin/question/questionAdd';
       $this->load->view('main-admin/template/template', $data);
   }


     public function que_delete()
    {
        $id = $this->uri->segment(3);
        $data = array(
                    "cstatus" => 2
                );

        $this->db->where('id', $id);
        $this->db->update('manage_quesion_hub', $data); 

        redirect(base_url() . 'question-hub');
    }

    public function addSelectedQuestion()
    {
        $questionID = $this->input->post('question_id');
        $courseId = $this->input->post('courseId');
        $test_id = $this->input->post('testid');
        $each_question_mark = $this->input->post('each_question_mark');
        $negative_mark = $this->input->post('negative_mark');
        $newArray  = array();
        foreach($questionID as $value){
            $newArray[] = $value;
        }

       $query  =  $this->db->query('select * from manage_quesion_hub where id IN('.implode(',', $newArray).') and course_id="'.$courseId.'"')->result_array();
     
       // if same data enter in database then delete 
       $this->db->delete('question_bank', array('course_id' => $courseId, 'test_id' => $test_id)); 

       foreach($query as $value){
           $retriveQuestions = array(
                "question_id" => $value['id'],
                "course_id" => $value['course_id'],
                "test_id" => $test_id,
                "section_id" => $value['section_id'],
                "passage" => $value['passage'],
                "passage_image" => $value['passage_image'], 
                'question' => $value['question'],
                "question_image" => $value['question_image'],
                "option1" => $value['option1'],
                "option2" => $value['option2'],
                "option3" => $value['option3'],
                "option4" => $value['option4'],
                "correct_answer" => $value['correct_answer'],             
                "mark" => $each_question_mark,             
                "negative_mark" => $negative_mark,             
                "explanation" => $value['explanation'],
                "explanation_file" => $value['explanation_file'],
                "reference" => $value['reference'],
                "expla_video" => $this->input->post('expla_video'),
                "cip" => $this->input->ip_address(),
                "cby" => $this->session->userdata("user_id"),
                "cstatus" => $value['cstatus']
            );

            $query  =  $this->db->query('select * from question_bank where question="'.$value['question'].'" and course_id="'.$courseId.'"');

            if($query->num_rows() > 0){
                $this->db->where('course_id', $courseId);
                $this->db->where('question', $value['question']);
                $insert = $this->db->update('question_bank', $retriveQuestions);
            }else{
                $insert = $this->db->insert('question_bank', $retriveQuestions);
            }
       }

       if(!empty($insert)) {
            $this->session->set_flashdata('msg', 'Question successfully add');
            redirect(base_url().'question-list/'.$test_id.'');
        } else {
            $this->session->set_flashdata('msg', 'some error occured. Please try again...');
            redirect(base_url().'assign-question/'.$test_id.'');
        }   
    }

    public function questionMark_update()
    {
       $question_id = $this->input->post('question_id');
        $each_mark = $this->input->post('each_mark');
       $negative_mark =  $this->input->post('negative_mark');
        //echo count($question_id);
        foreach($question_id as $key => $value){
            $data = array(
                "mark" => $each_mark[$key],
                "negative_mark" => $negative_mark[$key]
            );
           
          $insert = $this->common_list->update_data("question_bank", $data, $value);  
         
        }

        if(!empty($insert)){
            redirect('test-details');
        }  
       
    }
    
}
