<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogpost extends CI_Controller {

	public function index()
	{
		$this->load->view('header_hp');
		$this->load->view('blogpost_view',$isi);
		$this->load->view('footer_hp');
	}

	public function view($id)
	{
		$this->db->from('tbl_infokelurahan');
		$this->db->where('id', $id);
		$isi['data'] = $this->db->get();
		$this->load->view('header_hp');
		$this->load->view('blogpost_view',$isi);
		$this->load->view('footer_hp');
	}
}
