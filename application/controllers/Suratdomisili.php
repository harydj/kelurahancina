<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suratdomisili extends CI_Controller {

	public function index()
	{
		$isi['data'] = $this->db->get('tbl_domisili');
		$cek = $this->session->userdata('status');
		if($cek == 'admin'){
			$this->load->view('header');
		$this->load->view('ketdomisili/data_view',$isi);
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
		$this->load->view('ketdomisili/post');
		$this->load->view('footer');
		}
		else{
			header("location: ".base_url().'login');
		}
	}

	public function simpan()
	{
		$data['nama'] = $this->input->post('nama');
		$data['no_surat'] = $this->input->post('nosrt');
		$data['jenis_domisili'] = $this->input->post	('jenis');
	  $data['ttd_pejabat'] = $this->input->post('ttd');
		$this->db->insert('tbl_domisili',$data);

		redirect('Suratdomisili');
	}
}
