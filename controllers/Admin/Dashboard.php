<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->blade->view('template-backend/header-dashboard');
		$this->blade->view('admin/dashboard');
		$this->blade->view('template-backend/footer-dashboard');
	}
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Admin/Dashboard.php */
