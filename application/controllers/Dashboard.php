<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
	}

	public function index()
	{
		$user = $this->ion_auth->user()->row();
		$this->breadcrumbs->push('Dashboard', '/dashboard');
		$data = array(
			'title' => 'Dashboard' ,
			'content' => 'dashboard/dashboard', 
			'breadcrumbs' => $this->breadcrumbs->show(),
			'user' => $user ,
		);

		$this->load->view('layout/layout', $data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */ 
/* Please DO NOT modify this information : */
/* This file generated by Andre Bhaskoro (+62 82 333 817 317) At : 2016-09-26 10:07:14 */
/* http://bhas.web.id */