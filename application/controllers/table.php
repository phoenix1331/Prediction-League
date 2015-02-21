<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//Index Method

class Table extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
	//	$this->load->model('');
	    $this->load->helper('url');

	}

	public function index(){
	 	$data['title'] = 'Table';		
		//Load view
		$this->load->view('head');
		$this->load->view('table', $data);
		$this->load->view('foot');

	}


}