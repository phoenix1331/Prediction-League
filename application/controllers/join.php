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
              'value' => ''),
          'passwordAgain' => array(
              'name' => 'passwordAgain',
              'id' => 'passwordAgain',
              'placeholder' => 'Password Again',
              'value' => ''),
          'email' => array(
              'name' => 'email',
              'id' => 'email',
              'placeholder' => 'email',
              'value' => '')
        );
		
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