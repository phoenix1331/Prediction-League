<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//Index Method

class Table extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('get_table');
	    $this->load->helper('url');

	}

	public function index(){
		$data['table'] = $this->get_table->table();
	 	$data['title'] = 'Table';		
		//Load view
		$this->load->view('head',$data);
		$this->load->view('table', $data);
		$this->load->view('foot');

	}


}