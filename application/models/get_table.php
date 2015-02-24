<?php

class Get_table extends CI_Model {

	public function __construct(){
		//Load DB
		$this->load->database();
	}

	public function table(){
		//Get all entries

		$this->db->select('*');
		$this->db->from('maintable');
		$this->db->join('user', 'user.idUser = maintable.User_idUser');
		
		$query = $this->db->get();
		if($query == TRUE){
			return $query->result_array();
		}else{
			Echo "DB Not Working !!";
			die();
		}
	}

}

?>