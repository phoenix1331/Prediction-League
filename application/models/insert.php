<?php

class Insert extends CI_Model {

	public function __construct(){
		//Load DB
		$this->load->database();
	}

	public function insert_new_member(){
		//Default starting table value
		$i = 0;
		
		//Get Form Data
		$username = $this->input->post('username');
    	$email = $this->input->post('email');
    	$password = $this->input->post('password');	

    	$data = array('username'=>$username,'email'=>$email,'password'=>$password);
    	//Insert new member
    	$this->db->insert('user',$data);
    	//Return user id
    	$userID = $this->db->insert_id();
    	//Create blank table entry for new user
    	$this->db->insert('maintable',array('User_idUser'=>$userID,'P'=>$i,'W'=>$i,'L'=>$i,'D'=>$i,'F'=>$i,'A'=>$i,'GD'=>$i,'Pts'=>$i));

	}

}

?>