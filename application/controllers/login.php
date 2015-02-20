<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//Index Method

class Login extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
	//	$this->load->model('');

	}

		public function index(){

		$data['message'] = '';
		$data['title'] = 'Login';	
		//Form array
		$data['form'] = array(
          'username' => array(
              'name' => 'username',
              'id' => 'username',
              'placeholder' => 'Username',
              'autofocus'   => 'autofocus',
              'value' => ''),
          'password' => array(
              'name' => 'password',
              'id' => 'password',
              'placeholder' => 'Password',
              'value' => '')
        );	
		//Load view
		$this->load->view('head',$data);
		$this->load->view('login',$data);
		$this->load->view('foot');

	}

		public function check(){

		$data['message'] = 'Thanks for logging in !!';
		$data['title'] = 'Login';		
		//Load view
		$this->load->view('head',$data);
		$this->load->view('login',$data);
		$this->load->view('foot');

	}

}