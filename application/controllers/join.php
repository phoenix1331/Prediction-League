<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//Index Method

class Join extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
	//	$this->load->model('');
	}

		public function index(){

		$data['message'] = '';
		$data['title'] = 'Join Us';
		
		//Load view
		$this->load->view('head',$data);
		$this->load->view('join',$data);
		$this->load->view('foot');

	}

		public function check(){

		$data['message'] = 'Thanks for signing up !!';
		
		//Load view
		$this->load->view('head',$data);
		$this->load->view('join',$data);
		$this->load->view('foot');

	}

}