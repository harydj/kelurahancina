<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ceksurat extends CI_Controller {

	public function index()
	{
		$isi['data'] = $this->db->get('tbl_ceksurat');
		$this->load->view('header_hp');
		$this->load->view('homeservices/ceksurat_view',$isi);
		$this->load->view('footer_hp');
	}

}
