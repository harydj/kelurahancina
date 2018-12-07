<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mutasipndh extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if($cek == 'admin'){
			$this->load->view('header');
		$this->load->view('mutasi/m_pindah');
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
			$data['alasan'] = $this->input->post('alasan2');
		}else{
			$data['alasan'] = $this->input->post('alasan');
		}
		$data['alamat_tujuan'] = $this->input->post('alamat_tujuan');
		$data['dusun_tujuan'] = $this->input->post('dusun');
		$data['provinsi'] = $this->input->post('provinsi');
		$data['kabupaten'] = $this->input->post('kabupaten');
		$data['kecamatan'] = $this->input->post('kecamatan');
		$data['kel_desa'] = $this->input->post('kel_desa');
		$data['kode_pos'] = $this->input->post('kdpos');
		$data['tgl_pindah'] = $this->input->post('tgl');
		$data['klasifikasi'] = $this->input->post('klr');
		$data['jenis_pindah'] = $this->input->post('jenis');
		$data['penanda_tangan'] = $this->input->post('ttd');
		$data1['nik'] = $this->input->post('nik');
		$data1['nama'] = $this->input->post('nama');
		$data1['alamat'] = $this->input->post('alamat');
		$data1['no_telp'] = $this->input->post('no_telp');
		$data1['jenis_mutasi'] = "Mutasi Keluar";
		$this->db->insert('tbl_mutasikeluar',$data);
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
			$data['alasan'] = $this->input->post('alasan2');
		}else{
			$data['alasan'] = $this->input->post('alasan');
		}
		$data['alamat_tujuan'] = $this->input->post('alamat_tujuan');
		$data['dusun_tujuan'] = $this->input->post('dusun');
		$data['provinsi'] = $this->input->post('provinsi');
		$data['kabupaten'] = $this->input->post('kabupaten');
		$data['kecamatan'] = $this->input->post('kecamatan');
		$data['kel_desa'] = $this->input->post('kel_desa');
		$data['kode_pos'] = $this->input->post('kdpos');
		$data['tgl_pindah'] = $this->input->post('tgl');
		$data['klasifikasi'] = $this->input->post('klr');
		$data['jenis_pindah'] = $this->input->post('jenis');
		$data['penanda_tangan'] = $this->input->post('ttd');
		$data1['nik'] = $this->input->post('nik');
		$data1['nama'] = $this->input->post('nama');
		$data1['alamat'] = $this->input->post('alamat');
		$data1['no_telp'] = $this->input->post('no_telp');
		$data1['jenis_mutasi'] = "Mutasi Keluar";
		$this->db->set($data);
		$this->db->where('nik', $nik);
		$this->db->update('tbl_mutasikeluar');
		$this->db->set($data1);
		$this->db->where('nik', $nik);
		$this->db->update('tbl_listmutasi');
		redirect('Listmutasi');
	}
}
