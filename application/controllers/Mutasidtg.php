<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mutasidtg extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if($cek == 'admin'){
			$this->load->view('header');
		$this->load->view('mutasi/m_datang');
		$this->load->view('footer');
		}
		else{
			header("location: ".base_url().'login');
		}
	}

	public function simpan()
	{
		$data['no_surat'] = $this->input->post('nosrt');
		$data['nama_lengkap'] = $this->input->post('nama');
		$data['nik'] = $this->input->post('nik');
		$data['alamat'] = $this->input->post('alamat');
		$data['no_telp'] = $this->input->post('no_telp');
		if($this->input->post('alasan') == "else"){
			$data['alasan'] = $this->input->post('else');
		}else{
			$data['alasan'] = $this->input->post('alasan');
		}
		$data['tgl_pindah'] = $this->input->post('tgl_pindah');
		$data['klasifikasi'] = $this->input->post('klr');
		$data['jenis_pindah'] = $this->input->post('jenis');
		$data['penanda_tangan'] = $this->input->post('ttd');
		$data1['nik'] = $this->input->post('nik');
		$data1['nama'] = $this->input->post('nama');
		$data1['alamat'] = $this->input->post('alamat');
		$data1['no_telp'] = $this->input->post('no_telp');
		$data1['jenis_mutasi'] = "Mutasi Masuk";
		$this->db->insert('tbl_mutasidatang',$data);
		$this->db->insert('tbl_listmutasi',$data1);

		redirect('Listmutasi');
	}

	public function update($nik)
	{
		$data['no_surat'] = $this->input->post('nosrt');
		$data['nama_lengkap'] = $this->input->post('nama');
		$data['alamat'] = $this->input->post('alamat');
		$data['no_telp'] = $this->input->post('no_telp');
		if($this->input->post('alasan') == "else"){
			$data['alasan'] = $this->input->post('else');
		}else{
			$data['alasan'] = $this->input->post('alasan');
		}
		$data['tgl_pindah'] = $this->input->post('tgl_pindah');
		$data['klasifikasi'] = $this->input->post('klr');
		$data['jenis_pindah'] = $this->input->post('jenis');
		$data['penanda_tangan'] = $this->input->post('ttd');
		$data1['nik'] = $this->input->post('nik');
		$data1['nama'] = $this->input->post('nama');
		$data1['alamat'] = $this->input->post('alamat');
		$data1['no_telp'] = $this->input->post('no_telp');
		$data1['jenis_mutasi'] = "Mutasi Masuk";
		$this->db->set($data);
		$this->db->where('nik', $nik);
		$this->db->update('tbl_mutasidatang');
		$this->db->set($data1);
		$this->db->where('nik', $nik);
		$this->db->update('tbl_listmutasi');

		redirect('Listmutasi');
	}

	public function edit()
	{
		$cek = $this->session->userdata('status');
		if($cek == 'admin'){
			$this->load->view('header');
		$this->load->view('mutasi/datamutasi/edit_m_datang');
		$this->load->view('footer');
		}
		else{
			header("location: ".base_url().'login');
		}
	}

}
