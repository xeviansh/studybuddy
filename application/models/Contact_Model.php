<?php
class Contact_Model extends CI_Model{
		


	function saveEnquiry($data){
		$this->db->insert('inquiry',$data);
		$result = $this->db->affected_rows();
		if($result>0){
			return true;
		}  
		else{
			return false;
		}
	}

}
?>