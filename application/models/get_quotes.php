<?php

class Get_quotes extends CI_Model {

	public function __construct(){
		//Load DB
		$this->load->database();
	}

	public function quotes(){
		//Get all entries
		$query = $this->db->get('quotes');
		if($query == TRUE){
			return $query->result_array();
		}else{
			Echo "DB Not Working !!";
			die();
		}
	}

}

?>