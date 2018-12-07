<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datakk extends CI_Controller {



	public function index()
	{
		$cek = $this->session->userdata('status');
		if($cek == 'admin'){
			$this->load->view('header');
		$this->load->view('datapenduduk/datakk/datakk_view');
		$this->load->view('footer');
		}
		else{
			header("location: ".base_url().'login');
		}
	}
	public function post()
	{
		$cek = $this->session->userdata('status');
		if($cek == 'admin'){
			$this->load->view('header');
		$this->load->view('datapenduduk/datakk/adddatakk_view');
		$this->load->view('footer');
		}
		else{
			header("location: ".base_url().'login');
		}
	}
}
