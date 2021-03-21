<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('client_m');
		$this->load->library('form_validation');
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
	public function tambah(){
		$client = $this->client_m;
		$validation = $this->form_validation;
		$validation->set_rules($client->rules());

		if ($validation->run()){
			$client->tambah_data();
			$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('client/client_tampil');
		}
		$this->load->view("client/client_tampil");
	}
}
	
