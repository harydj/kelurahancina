<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduanhp extends CI_Controller {

	public function index()
	{
		$this->load->view('header_hp');
		$this->load->view('homeservices/pengaduan_view');
		$this->load->view('footer_hp');
	}

	public function simpan()
	{
		$data['no_ktp'] = $this->input->post('no_ktp');
		$data['nama'] = $this->input->post('nama');
		$data['isi'] = $this->input->post('isi');
		$data['waktu_input'] = time();
		$this->db->insert('tbl_pengaduan',$data);
		redirect('Pengaduanhp');

	}

}
