<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//Simple calc class

class Calc extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('get_names');
		$this->load->helper('url');
	}

		public function index()
	{
		
		$data['names'] = $this->get_names->get_names();
		$this->load->view('head', $data);
		$this->load->view('welcome_message');
		$this->load->view('foot');
}

		public function create()
{
	$this->load->helper('form');
	$this->load->library('form_validation');

	$data['name'] = 'Create a new name';

	//$this->form_validation->set_rules('title', 'Title', 'required');
	$this->form_validation->set_rules('name', 'Name', 'required');

	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('head', $data);
		$this->load->view('form');
		$this->load->view('foot');

	}
	else
	{
		$this->get_names->set_name();
		redirect(site_url("calc"));
}





}

}


/*
class Calc extends CI_Controller{


		public function sum($x,$y){
		
				//Use x & y from $this object created in construct method
				return 'The total sum is: ' . ($x + $y);
			
	
}

}*/