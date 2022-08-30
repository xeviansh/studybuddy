<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		    $this->load->model('common_list');
        $this->load->model('common_Model');		
        $this->load->library('pagination');
	  }
    // public function index()
    // {
    //     $data['main_content'] = 'users/quiz/start-quiz';
	// 	$this->load->view('users/template/template',$data);
    // }

    public function instuction($testID)
    {        
       //$data['getTestData'] =  $this->common_list->set_data('manage_testdetails', $testID);
       $data['getTestData'] =  $this->common_list->testwisetestlist($testID,$this->session->userdata('user_id'));
       
        $data['testID'] = $testID;

        $data['examType'] = $this->common_list->set_data('manage_testdetails', $testID);
      
        $data['main_content'] = 'users/quiz/instruction';
        $this->load->view('users/template/template',$data);
    }

    public function onlineExam($id)
    {
       $query = $this->db->query('select * from users where id='.$this->session->userdata('user_id').'')->row_array();       
       $testDetails = $this->db->query('select * from manage_testdetails where id='.$id.'')->row_array();
       $question_list = $this->common_list->get_data_uri('question_bank','test_id',$id);
      //$question_list = $this->common_list->getRecordCount($id);
       $data['questionList'] = $question_list;
       $data['total_question'] = sizeof($question_list);
       $data['student_details'] =  $query;
       $data['testId'] = $testDetails;
       $data['main_content'] = 'front-end/exam-page';
   
      $data['getSection'] = $this->db->select('count(x.id) as total,y.id, y.name')
                            ->from('question_bank x')
                            ->join('manage_section y', 'x.section_id = y.id')
                            ->where('x.test_id', $id)
                            ->group_by("section_id")
                            ->order_by("x.section_id","asc")
                            ->get()->result_array();
        //echo $this->db->last_query(); die;
        $GetattemptID = $this->db->query('select * from attempt_details where test_id='.$id.' and 
        student_id="'. $this->session->userdata('user_id').'" order by id desc')->row_array();

         if($testDetails['test_type'] == 1){
            $path = 'front-end/exam';
         }elseif($testDetails['test_type'] == 2){  
            $data['GetattemptID'] = $GetattemptID['id'];
            $path = 'front-end/practice';
         }else {
            $data['GetattemptID'] = $GetattemptID['id'];
            $path = 'front-end/quiz';
         }                   
         $this->load->view($path,$data);
       }

      public function loadData($record=0, $testID=0) {  
        $page=$this->uri->segment(5);
        $data['page']=$page;
  		$recordPerPage = 1;
          if($record != 0){
  			$record = ($record-1) * $recordPerPage;
  		}    

      	$recordCount = $this->common_list->getRecordCount($testID);
      	$questionRecord = $this->common_list->getRecord($record,$recordPerPage,$testID);
      	$config['base_url'] = base_url().'Quiz/loadData';
      	$config['use_page_numbers'] = TRUE;		
		    $config['total_rows'] = $recordCount;
		    $config['per_page'] = $recordPerPage;
		$this->pagination->initialize($config);
       
		//$data['pagination'] = $this->pagination->create_links();
        $data['totalRecord'] = $recordCount;
		$data['questionRecord'] = $questionRecord;
		echo json_encode($data);		
	}

    public function addAnswer()
    {
       $correctAns = $this->common_list->set_data('question_bank', $this->input->post('questionID'));
       
        $answerData = array(
                "test_id" => $this->input->post('testID'),
                "course_id" => $this->input->post('CourseID'),
                "question_id" => $this->input->post('questionID'),
                'attempt_id' => !empty($this->input->post('attempt_id'))? $this->input->post('attempt_id') : '',
                "selected_answer" => $this->input->post('selected_answer'),
                "correct_answer" => $correctAns['correct_answer'],
                "type" => $this->input->post('dataType'),
                'cip' => $this->input->ip_address(),
                'cby' => $this->session->userdata('user_id'),
            );
           $CheckValue =  $this->db->query('select count(*) as allCount, id from manage_answer_sheet where test_id="'.$this->input->post('testID').'" and course_id="'.$this->input->post('CourseID').'" and question_id="'. $this->input->post('questionID').'"')->row_array(); 
            
           if($CheckValue['allCount'] > 0){
            $this->common_list->update_data("manage_answer_sheet", $answerData, $CheckValue['id']); 
            echo $this->db->insert_id();
           }else{
            $this->db->insert('manage_answer_sheet', $answerData);    
            echo $this->db->insert_id();
           }
       
    }

    public function practice_addAnswer()
    {
       $correctAns = $this->common_list->set_data('question_bank', $this->input->post('questionID'));
       
        $answerData = array(
                "test_id" => $this->input->post('testID'),
                "course_id" => $this->input->post('CourseID'),
                "question_id" => $this->input->post('questionID'),
                'attempt_id' => !empty($this->input->post('attempt_id'))? $this->input->post('attempt_id') : '',
                "selected_answer" => $this->input->post('selected_answer'),
                "correct_answer" => $correctAns['correct_answer'],
                "type" => $this->input->post('dataType'),
                'cip' => $this->input->ip_address(),
                'cby' => $this->session->userdata('user_id'),
            );
           $CheckValue =  $this->db->query('select count(*) as allCount, id from manage_answer_sheet where test_id="'.$this->input->post('testID').'" and course_id="'.$this->input->post('CourseID').'" and question_id="'. $this->input->post('questionID').'" and attempt_id="'.$this->input->post('attempt_id').'"')->row_array(); 
            
           if($CheckValue['allCount'] > 0){
            $this->common_list->update_data("manage_answer_sheet", $answerData, $CheckValue['id']); 
            echo $this->db->insert_id();
           }else{
            $this->db->insert('manage_answer_sheet', $answerData);    
            echo $this->db->insert_id();
           }
       
    }

    public function checkAnswerForbutton()
    {
        if(!empty($this->input->post('attemptID'))){
            $ansvalue =  $this->db->query('select * from manage_answer_sheet where test_id="'.$this->input->post('testID').'" and course_id="'.$this->input->post('CourseID').'" and cby="'. $this->input->post('studentId').'" and attempt_id="'.$this->input->post('attemptID').'"')->result_array();
        }else{
            $ansvalue =  $this->db->query('select * from manage_answer_sheet where test_id="'.$this->input->post('testID').'" and course_id="'.$this->input->post('CourseID').'" and cby="'. $this->input->post('studentId').'"')->result_array();
        }
       
        echo json_encode($ansvalue);
    }

    public function CheckOptionValue()
    {
        $getData = $this->common_list->get_single_row('manage_answer_sheet','question_id', $this->input->post('QuestionID'));
       echo json_encode($getData);
      
    }
    public function practice_CheckOptionValue()
    {
        $getData =  $this->db->get_where('manage_answer_sheet', array('question_id' => $this->input->post('QuestionID'), 'attempt_id' => $this->input->post('attemptID')));
       
       echo json_encode($getData);
      
    }

    

    public function testsubmitResult()
    {
        if(!empty($this->input->post('attemptID'))){
            $AnsCount =  $this->db->query("select count(*) as total, type from
            manage_answer_sheet where test_id='".$this->input->post('testID')."' and cby='".$this->session->userdata('user_id')."' and attempt_id='".$this->input->post('attemptID')."' GROUP BY type")->result_array();
        }else{
            $AnsCount =  $this->db->query("select count(*) as total, type from
            manage_answer_sheet where test_id='".$this->input->post('testID')."' and cby='".$this->session->userdata('user_id')."' GROUP BY type")->result_array();
        }

        $newArray = array();
        $totalRecord = array();
        foreach($AnsCount as $key => $value){
            $newArray[$value['type']] = $value['total'];
        }       

        $recordCount = $this->common_list->getqestionRecord('question_bank','test_id', $this->input->post('testID'));
        $totalRecord['allQuestion'] = $recordCount;
        
        echo json_encode(array_merge($newArray, $totalRecord));
    }


    public function result($id){
       $data['test_data'] =  $this->common_list->set_data('manage_testdetails',$id);        
       
       $data['ans_details'] = $this->db->query("select id, (select count(id) from manage_answer_sheet where type='review' 
       and cby='".$this->session->userdata('user_id')."' and test_id='$id') as review, (select count(id) from manage_answer_sheet where type='submit' 
       and cby='".$this->session->userdata('user_id')."' and test_id='$id') as submit from manage_answer_sheet where cby='".$this->session->userdata('user_id')."' and test_id='$id'
        group by type limit 1")->row_array();
       //$data['correctAnswer'] = $this->db->query("select count(id) as cans,question_id from manage_answer_sheet where selected_answer = correct_answer and test_id='$id'")->result_array();

      $query =  $this->db->query("select id, question_id from manage_answer_sheet where selected_answer = correct_answer and test_id='$id'");
      
      $data['correctAnswer'] = $query->num_rows();
      
      $getQuesID = $query->result_array(); 

      $correct_question = array();
      foreach($getQuesID as $value){
        $correct_question[] = $value['question_id'];
      }
      
      if(!empty($correct_question)){
         $cns =  implode(",",$correct_question);
      }else{
        $cns = "' '";  
      }
      $data['totalMark'] =  $this->db->query("select sum(mark) as totalMark from question_bank where question_id IN(".$cns.")")->result_array();


       //$data['wrongAns'] = $this->db->query("select count(id) as wrongAns from manage_answer_sheet where selected_answer != correct_answer and test_id='$id'")->result_array(); 

       $wrongAns = $this->db->query("select id, question_id from manage_answer_sheet where selected_answer != correct_answer and test_id='$id'");
      
       $data['totalwrongAns'] =   $wrongAns->num_rows();
       
       $getnQuesID = $wrongAns->result_array(); 

      $neg_question = array();
      foreach($getnQuesID as $value){
        $neg_question[] = $value['question_id'];
      }
      if(!empty($neg_question)){
          $arrayData = implode(",",$neg_question);
      }else{
        $arrayData = "' '";
      }

      $data['totalNegativeMark'] =  $this->db->query("select sum(negative_mark) as totalnegativeMark from question_bank where question_id IN(".$arrayData.")")->result_array();

        $data['main_content'] = 'users/quiz/quiz-result';
        $this->load->view('users/template/template',$data);
       
    }

    public function exam_preview($id)
    {     
       
        $testDetails = $this->db->query('select * from manage_testdetails where id='.$id.'')->row_array();
 
        $question_list = $this->common_list->get_data_uri('question_bank','test_id',$id);
 
        $data['questionList'] = $question_list;
        $data['total_question'] = sizeof($question_list);
        $data['testId'] = $testDetails;
        
        $data['main_content'] = 'users/quiz/quiz-preview';
        $this->load->view('users/template/template',$data);  
    }

    public function exam()
    {
        $data['status'] = status();
        $data['question'] = questionType();
        $data['testlist'] = $this->common_list->get_data_uri('manage_testdetails','test_type',1);
        $data['main_content'] = 'users/courses/exam';
		$this->load->view('users/template/template',$data);     
    }
    public function practice()
    {
        $data['status'] = status();
        $data['question'] = questionType();
        $data['testlist'] = $this->common_list->get_data_uri('manage_testdetails','test_type',2);
        $data['main_content'] = 'users/courses/practice';
		$this->load->view('users/template/template',$data);     
    }
    public function quiz()
    {
        $data['status'] = status();
        $data['question'] = questionType();
        $data['testlist'] = $this->common_list->get_data_uri('manage_testdetails','test_type',3);
        $data['main_content'] = 'users/courses/quiz';
		$this->load->view('users/template/template',$data);     
    }

    public function practiceDeatils()
    {
        $pdetails = array(
            "test_id" => $this->input->post('testid'),
            "student_id" => $this->input->post('student_id'),
            "date" => $this->input->post('cdate'),
            "time" => $this->input->post('ctime'),           
            'cip' => $this->input->ip_address(),
            'cby' => $this->session->userdata('user_id'),
        );
    
        $insert = $this->db->insert('attempt_details', $pdetails);    
        
        if(!empty($insert)){
            $insert_id = $this->db->insert_id();
            echo  $insert_id;
        }
       
    }
    
    public function practiceTestDetails()
    {
       $testid =  $this->input->post('testid');
      $att_details =  $this->db->query('select * from attempt_details where test_id="'.$testid.'"')->result_array();

        $newArr = array();
       foreach($att_details as $value){
            $testdetails_record =  $this->db->query('select * from manage_testdetails where id="'.$testid.'"')->row_array();
            $att_count =  $this->db->query('select count(*) as totalAttempt from manage_answer_sheet where attempt_id="'.$value['id'].'" and test_id="'.$testid.'"')->row_array(); 
            
            $remainingQuestion = $testdetails_record['total_question'] - $att_count['totalAttempt']; 
           
            $newArr[] = array(
                "attemptid" => $value['id'],
                "testid" => $testid,
                "datetime" => $value['created_at'],
                "total_question" => $testdetails_record['total_question'],
                "TotalAttempted" =>  $att_count['totalAttempt'],
                "NotAttempted" => $remainingQuestion
            );
            
       }
       echo json_encode($newArr);
    }


    public function practice_result(){
        $id = $this->uri->segment(2); // test id
        $attemptid = $this->uri->segment(3);
      
        $data['test_data'] =  $this->common_list->set_data('manage_testdetails',$id);        
        
        $data['ans_details'] = $this->db->query("select id, (select count(id) from manage_answer_sheet where type='review' 
        and cby='".$this->session->userdata('user_id')."' and test_id='$id' and attempt_id='".$attemptid."') as review, (select count(id) from manage_answer_sheet where type='submit' 
        and cby='".$this->session->userdata('user_id')."' and test_id='$id' and attempt_id='".$attemptid."') as submit from manage_answer_sheet where cby='".$this->session->userdata('user_id')."' and test_id='$id' and attempt_id='".$attemptid."'
         group by type limit 1")->row_array();
        //$data['correctAnswer'] = $this->db->query("select count(id) as cans,question_id from manage_answer_sheet where selected_answer = correct_answer and test_id='$id'")->result_array();
 
       $query =  $this->db->query("select id, question_id from manage_answer_sheet where selected_answer = correct_answer and test_id='$id' and attempt_id='".$attemptid."'");
       
       $data['correctAnswer'] = $query->num_rows();
       
       $getQuesID = $query->result_array(); 
 
       $correct_question = array();
       foreach($getQuesID as $value){
         $correct_question[] = $value['question_id'];
       }
       
       if(!empty($correct_question)){
          $cns =  implode(",",$correct_question);
       }else{
         $cns = "' '";  
       }
       $data['totalMark'] =  $this->db->query("select sum(mark) as totalMark from question_bank where question_id IN(".$cns.")")->result_array();
 
 
        //$data['wrongAns'] = $this->db->query("select count(id) as wrongAns from manage_answer_sheet where selected_answer != correct_answer and test_id='$id'")->result_array(); 
 
        $wrongAns = $this->db->query("select id, question_id from manage_answer_sheet where selected_answer != correct_answer and test_id='$id' and attempt_id='".$attemptid."'");
       
        $data['totalwrongAns'] =   $wrongAns->num_rows();
        
        $getnQuesID = $wrongAns->result_array(); 
 
       $neg_question = array();
       foreach($getnQuesID as $value){
         $neg_question[] = $value['question_id'];
       }
       if(!empty($neg_question)){
           $arrayData = implode(",",$neg_question);
       }else{
         $arrayData = "' '";
       }
 
       $data['totalNegativeMark'] =  $this->db->query("select sum(negative_mark) as totalnegativeMark from question_bank where question_id IN(".$arrayData.")")->result_array();
 
         $data['main_content'] = 'users/quiz/quiz-result';
         $this->load->view('users/template/template',$data);
        
     }

     public function getQuesref()
     {
        $query =  $this->common_list->set_data('question_bank', $this->input->post('questionID'));
        echo json_encode($query);
     }
 
}
/* End of file My_course.php */
?>