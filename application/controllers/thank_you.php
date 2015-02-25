<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//Index Method

class Thank_you extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
	 	$this->load->model('insert');

	}

		public function index(){

		$data['message'] = '';
		$data['title'] = 'Thank You';	
		//If form post insert data
    	if($this->input->post()){
    		$this->insert->insert_new_member(); 
		}

		//Load view
		$this->load->view('head',$data);
		$this->load->view('thank_you',$data);
		$this->load->view('foot');

	}

}