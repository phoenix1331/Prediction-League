<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//Index Method

class Login extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
	//	$this->load->model('');
	//	$this->load->helper('url');
	}

		public function index(){
		
		//Load view
		$this->load->view('head');
		$this->load->view('login');
		$this->load->view('foot');

	}

}