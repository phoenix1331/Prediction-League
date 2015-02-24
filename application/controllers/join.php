<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//Index Method

class Join extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

		public function index(){

		$data['message'] = '';
		$data['title'] = 'Join Us';
		//Form array
		$data['form'] = array(
          'username' => array(
              'name' => 'username',
              'id' => 'username',
              'placeholder' => 'Username / Display Name',
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
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
		if ($this->form_validation->run() == FALSE){
			//Load view
			$this->load->view('head',$data);
			$this->load->view('join',$data);
			$this->load->view('foot');
		}else{
			//Load view
			$this->load->view('head',$data);
			$this->load->view('create_account',$data);
			$this->load->view('foot');
		}

	}

		public function check(){

		$data['message'] = 'Thanks for signing up !!';
		
		//Load view
		$this->load->view('head',$data);
		$this->load->view('join',$data);
		$this->load->view('foot');

	}

}