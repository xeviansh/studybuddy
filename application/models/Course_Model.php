<?php

class Course_Model extends CI_Model {

function insert_course($data){
	$this->db->insert('courses',$data);
    return true;
}

function update_course($data,$id){
	$this->db->where('ID', $id);
	$this->db->update('courses',$data);
    return true;
}


function courses_list()
    {
        $query=$this->db->get('courses');
        return $query->result();
    }
	
	function delete_course($id)
    {
		$this->db->where('ID', $id);
		$this->db->delete('courses');
    }

	function single_course($id)
    {
		
		$this->db->where('ID',$id);
		$query=$this->db->get('courses');
		return $query->result();
    }
	
	


function insert_course_meta($data){
	$this->db->insert('course_meta',$data);
    $result = $this->db->affected_rows();
    if($result>0){
		return true;
	}
	else{
		return false;
	}
}


function update_course_meta($data,$id){
	$this->db->where('ID', $id);
	$this->db->update('course_meta',$data);
    $result = $this->db->affected_rows();
    if($result>0){
		return true;
	}
	else{
		return false;
	}
}

	
function delete_course_lesson($id)
{
	$this->db->where('ID', $id);
	$this->db->delete('course_meta');
}
	

	
function course_lessons($id)
{
	
	
  $this->db->select("*,m.ID as course_meta_id");
  $this->db->from('courses as c');
  $this->db->join('course_meta as m', 'm.course_id = c.ID');
  $this->db->join('lessons as l', 'm.lesson_id = l.ID');
  $this->db->where('m.course_id', $id);
  $this->db->order_by("m.position_order", "asc");
  $query = $this->db->get();
  return $query->result();



}


function full_course_detail($id)
{
	$this->db->select("*,m.ID as course_meta_id,t.ID as topic_id");
	$this->db->from('courses as c');
	$this->db->join('course_meta as m', 'c.ID = m.course_id');
	$this->db->join('lessons as l', 'l.ID = m.lesson_id');
	$this->db->join('topics as t', 't.lesson_id = l.ID');
	$this->db->join('quiz as q', 'q.ID = t.quiz_id','left');
	$this->db->where('c.ID', $id);
	$this->db->order_by("m.position_order", "asc");
	$query = $this->db->get();
	return $query->result();
}


    public function getRows($id = ''){ 
        $this->db->select('*'); 
        $this->db->from('courses'); 
       // $this->db->where('status', '1'); 
        if($id){ 
            $this->db->where('ID', $id); 
            $query = $this->db->get(); 
            $result = $query->row_array(); 
        }else{ 
            $this->db->order_by('ID', 'asc'); 
            $query = $this->db->get(); 
            $result = $query->result_array(); 
        } 
         
        // return fetched data 
        return !empty($result)?$result:false; 
    } 

}
