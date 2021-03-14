<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('client_m');
		$this->load->helper('url');
	}
	public function index()
	{
		$data['client'] = $this->client_m->tampil_data();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar');
		$this->load->view('client/client_tampil',$data);
		$this->load->view('template/footer');
	}
}	
