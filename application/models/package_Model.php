<?php

class package_Model extends CI_Model {

function insert_course($data){
	$this->db->insert('manage_package',$data);
    return true;
}

function update_package($data,$id){
	$this->db->where('id', $id);
	$this->db->update('manage_package',$data);
    return true;
}
function package_list()
    {
        $query=$this->db->get('mange_package');
        return $query->result();
    }
}
?>