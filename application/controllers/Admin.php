<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar');
		$this->load->view('admin/index');
		$this->load->view('template/auth_footer');
	}
}
