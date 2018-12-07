<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
	parent::__construct();
		// session_start();

	}

	public function index()
	{
	$this->load->library('session');
		$cek = $this->session->userdata('username');
		if (empty($cek)) {
		$this->load->model('db_model');
			$this->load->view('login_view');
		}else{
			$st = $this->session->userdata('status');
			if ($st == 'admin') {
				header('location:'.base_url().'Admin');
			}else{
				header('location:'.base_url());
			}
		}
		// $this->load->model('db_model');
		// $this->load->view('login_view');

	}
}
