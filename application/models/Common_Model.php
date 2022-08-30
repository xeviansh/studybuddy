<?php
class Common_Model extends CI_Model{
	public function getData($tbl)
	{
		$query=$this->db->get($tbl);
        $count=$query->num_rows();
        if($count>0)
         return $query->result_array();
        else
         return FALSE;
	}
	public function getDataby($tbl,$data)
	{
		$query  =  $this->db->get_where($tbl,$data)->result_array();
        //echo $this->db->last_query();die;
        // $count=$query->num_rows();
        // if($count>0)
        return $query;
        // else
        //  return FALSE;
	}
}
?>