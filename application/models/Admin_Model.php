<?php
	class Admin_Model extends CI_Model{
		
		
		public function login($email, $encrypt_password){
			//Validate
			$this->db->select("*"); 
			$this->db->from('users');
			$this->db->where('email', $email);
			$this->db->where('password', $encrypt_password);
			$this->db->where("(role='admin')", NULL, FALSE);
			$query = $this->db->get();
			return $query->result();
			
		}
		function is_email_available_Admin($email,$id)  
		{  
			 $this->db->where('email', $email); 
			 $this->db->where('ID!=', $id); 
			 $query = $this->db->get("users");  
			 if($query->num_rows() > 0)  
			 {  
				  return true;  
			 }  
			 else  
			 {  
				  return false;  
			 }  
		} 
		
	}