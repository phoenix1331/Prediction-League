<?php

class Get_table extends CI_Model {

	public function __construct(){
		//Load DB
		$this->load->database();
	}

	public function table(){
		//Get all entries
		$query = $this->db->get('maintable');
		if($query == TRUE){
			return $query->result_array();
		}else{
			Echo "DB Not Working !!";
			die();
		}
	}

}

?>