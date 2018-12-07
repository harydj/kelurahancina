<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuanktp extends CI_Controller {

	public function index()
	{
		$this->load->view('header_hp');
		$this->load->view('pengajuanktp_view');
		$this->load->view('footer_hp');
	}
}
