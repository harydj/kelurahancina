<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suratblmmenikah extends CI_Controller {

	public function index()
	{
		$isi['data'] = $this->db->get('tbl_belummenikah');
		$cek = $this->session->userdata('status');
		if($cek == 'admin'){
			$this->load->view('header');
		$this->load->view('ketblmmenikah/data_view',$isi);
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
    $this->load->view('ketblmmenikah/post');
    $this->load->view('footer');
    }
    else{
      header("location: ".base_url().'login');
    }
  }

	public function simpan()
	{
		$data['nama'] = $this->input->post('nama');
		$data['nik'] = $this->input->post('nik');
		$data['no_surat'] = $this->input->post	('nosrt');
	  $data['maksud'] = $this->input->post('maksud');
		$data['ttd_pejabat'] = $this->input->post('ttd');
		$this->db->insert('tbl_belummenikah',$data);
		redirect('Suratblmmenikah');
	}
}
