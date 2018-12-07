<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan extends CI_Controller {

	public function index()
	{
		$isi['data'] = $this->db->get('tbl_pengaduan');
		$cek = $this->session->userdata('status');
		if($cek == 'admin'){
		$this->load->view('header');
		$this->load->view('pengaduan_view',$isi);
		$this->load->view('footer');
		}
		else{
			header("location: ".base_url().'login');
		}
	}

	public function delete_by_id($ktp)
	{
		$this->db->delete('tbl_pengaduan', array('no_ktp' => $ktp));
		redirect('Pengaduan');
	}

}
