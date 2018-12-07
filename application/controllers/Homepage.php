<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function index()
	{
		$isi['data'] = $this->db->get('tbl_infokelurahan');
		$this->load->view('header_hp');
		$this->load->view('homepage_view',$isi);
		$this->load->view('footer_hp');
	}
}
