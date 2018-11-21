<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	  	$this->load->model('usersmodel');
	}

	public function index()
	{
		$data['users'] = Usersmodel::all();

		$this->blade->view('template-backend/header-dashboard');
		$this->blade->view('admin/users',$data);
		$this->blade->view('template-backend/footer-dashboard');
	}

}

/* End of file Users.php */
/* Location: ./application/controllers/Admin/Users.php */
