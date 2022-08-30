<?php
	class Common_list extends CI_Model{
        function get_data($table)
        {
            $this->db->order_by("id", "desc");
            $query=$this->db->get_where($table,array("cstatus>"=>0));
            return $query->result_array();
        }

        function get_single_row($table,$column_name,$id)
        {
            $query=$this->db->get_where($table, array($column_name => $id));                       
            return $query->row();
        }

        function get_data_uri($table,$column_name,$id)
        {
            $this->db->order_by("id", "asc");
            $query=$this->db->get_where($table, array($column_name => $id, 'cstatus' => '1'));                       
            return $query->result_array();
        }

        function set_data($table, $id)
        {
            $query=$this->db->get_where($table, array('id' => $id));;
            return $query->row_array();
        }

        function update_data($table, $data, $id){	
            $this->db->set($data);
            $this->db->where('id', $id);
            $res =  $this->db->update($table); 
             return $res;
          
        }
        public function delete($table, $id)
        {
            $data = $this->db->delete($table, array('id' => $id));
            return $data;
        }

        public function package_list($tbl)
        {
          $query =  $this -> db
                        -> select('id,name')
                        -> where('cstatus', 1)                        
                        -> get($tbl)
                        -> result_array();
            return $query;                       
        }

        public function testlist($studentID, $courseID)
        {
            $this->db->select('x.id, x.course_id, x.test_name, x.question_type, x.test_type, x.start_date, 
            x.end_date, x.total_question, x.total_mark, x.each_question_mark, x.negative_mark, x.timer, x.cip,
            y.student_id, y.duration, y.activation_date, y.expiry_data, y.payment_id, y.payment_response,y.amount,x.cstatus'); 
            $this->db->from('manage_testdetails  as x');
            $this->db->join('manage_my_course as y', 'y.course_id = x.course_id','inner');
            $this->db->where('y.student_id', $studentID); 
            $this->db->where('y.course_id', $courseID);            
            $query = $this->db->get()->result_array();   

            //echo $this->db->last_query();exit;
            return $query;
           
        }

        public function studentwisetestlist($studentID)
        {
            $this->db->select('x.id, x.course_id, x.test_name, x.test_type, x.start_date, 
            x.end_date, x.total_question, x.total_mark, x.each_question_mark, x.negative_mark, x.timer, x.cip,
            y.student_id, y.duration, y.activation_date, y.expiry_data, y.payment_id, y.payment_response,y.amount,x.cstatus'); 
            $this->db->from('manage_testdetails  as x');
            $this->db->join('manage_my_course as y', 'y.course_id = x.course_id','inner');
            $this->db->where('y.student_id', $studentID);  
            $query = $this->db->get()->result_array();   
            //echo $this->db->last_query();exit;
            return $query;
           
        }

        public function testwisetestlist($test_id,$studentId)
        {
            $this->db->select('count(x.id) as allCount, x.id, x.course_id, x.test_name, x.test_type, x.start_date, 
            x.end_date, x.total_question, x.total_mark, x.each_question_mark, x.negative_mark, x.timer, x.cip,
            y.student_id, y.duration, y.activation_date, y.expiry_data, y.payment_id, y.payment_response,y.amount,x.cstatus'); 
            $this->db->from('manage_testdetails  as x');
            $this->db->join('manage_my_course as y', 'y.course_id = x.course_id','inner');
            $this->db->where('x.id', $test_id);  
            $this->db->where('y.student_id', $studentId);  
            $query = $this->db->get()->row_array();   
          // echo $this->db->last_query();exit;          
            return $query;           
        }

        public function testDetails($testId)
        {
            $this->db->select('testDetails.id,testDetails.unic_id,testDetails.question_type,package.name'); 
            $this->db->from('manage_testdetails  as testDetails');
            $this->db->join('mange_package as package', 'package.id = testDetails.package_name','inner');
            $this->db->where('testDetails.id', $testId); 
            $query = $this->db->get()->row_array();   
            return $query;
           
        }

        
        public function gettbledata($table, $column_name, $id)
        {
            $query=$this->db->get_where($table, array($column_name => $id));
            return $query->result_array();
        }


        public function getRecord($rowno,$rowperpage,$testID) {	
            $this->db->select('*');
            $this->db->from('question_bank');
            $this->db->where('test_id', $testID);
            $this->db->limit($rowperpage, $rowno);  
            $query = $this->db->get();   
            // echo $this->db->last_query();
            // exit;    	
           return $query->result_array();
        }

        public function getRecordCount($testID) {
            $this->db->select('count(*) as allcount');
              $this->db->from('question_bank');
              $this->db->where('test_id', $testID);
              $query = $this->db->get();
              $result = $query->result_array();      
              return $result[0]['allcount'];
        }

        public function getqestionRecord($table, $columnName, $name)
        {
            $this->db->select('count(*) as allcount');
            $query= $this->db->get_where($table, array($columnName => $name))->result_array();
            return $query[0]['allcount'];
        }



        public function insertImage($data = array()) { 
            if(!empty($data)){                  
                // Insert gallery data 
                $insert = $this->db->insert_batch('manage_syllabus_details', $data);                  
                // Return the status 
                return $insert?$this->db->insert_id():false; 
            } 
            return false; 
        } 

        
		
	}
?>