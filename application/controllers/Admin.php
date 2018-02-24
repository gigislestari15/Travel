<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('form');
	}

	public function index()
	{
				
	}	

	public function login()
	{
		return $this->load->view('admin/login');
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */