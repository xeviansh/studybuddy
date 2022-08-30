<?php
	class User_Model extends CI_Model{
		
		
		public function login($email, $encrypt_password){
			//Validate
			$this->db->select("*"); 
			$this->db->from('users');
			$this->db->where('email', $email);
			$this->db->where('cstatus',1);
			//$this->db->where('password', $encrypt_password);
			$this->db->where("(role='student')", NULL, FALSE);
			$query = $this->db->get();
			return $query->result();
		}
		
				// Check email exists
		public function check_email_exists($email){
			$query = $this->db->get_where('users', array('email' => $email));

			if(empty($query->row_array())){
				return true;
			}else{
				return false;
			}
		}
		
	public function register($userdata){
		$this->db->insert('users', $userdata);
		$afftectedRows = $this->db->affected_rows();
		if($afftectedRows>0){
			return true;
		}
		else{
			return false;
		}
	}
	
	
	
	
	
	
		public function get_email_data($email){
			$this->db->select("*"); 
			$this->db->from('users');
			$this->db->where('email', $email);
			$query = $this->db->get();
			return $query->result();
		}
	
	
	
	
	
	
	
	

function single_user($id)
{
	
	$this->db->where('ID',$id);
	$query=$this->db->get('users');
	return $query->result();
}	
	
	
function update_user($id,$data){
	$this->db->where('ID', $id);
	$afftectedRows = $this->db->update('users',$data);
    if($afftectedRows>0){
			return true;
		}
		else{
			return false;
		}
}	
	


				// Check email exists
		public function is_unique_email($email,$user_id){
			$query = $this->db->get_where('users', array('email' => $email,'id !=' => $user_id));
			if(empty($query->row_array())){
				return true;
			}else{
				return false;
			}
		}
	
	}