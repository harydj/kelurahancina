<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aktekelahiran extends CI_Controller {

	public function index()
	{
		$isi['data'] = $this->db->get('tbl_akte');
		$cek = $this->session->userdata('status');
		if($cek == 'admin'){
			$this->load->view('header');
		$this->load->view('aktekelahiran/data_view',$isi);
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
		$this->load->view('aktekelahiran/post');
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
		$data['nama_anak'] = $this->input->post('nama_anak');
		$data['jk_anak'] = $this->input->post('jk_anak');
		$data['tempat_lahir'] = $this->input->post('tplhr');
		$data['tgl_lahir'] = $this->input->post('tgl');
		$data['agama'] = $this->input->post('agama');
		$data['anak_ke'] = $this->input->post('anak_ke');
		$data['no_suratrs'] = $this->input->post('nobdn');
		$data['alamat'] = $this->input->post('alamat');
		$data['nik_ibu'] = $this->input->post('nik_ibu');
		$data['nik_ayah'] = $this->input->post('nik_ayah');
		$data['ttd_pejabat'] = $this->input->post('ttd');
		$this->db->insert('tbl_akte',$data);
		redirect('Aktekelahiran');
	}
}
