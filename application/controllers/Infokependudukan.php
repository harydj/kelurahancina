<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infokependudukan extends CI_Controller {

	public function index()
	{
		$isi['data'] = $this->db->get('tbl_infokependudukan');
		$cek = $this->session->userdata('status');
		if($cek == 'admin'){
			$this->load->view('header');
		$this->load->view('datapenduduk/infokependudukan/infokependudukan_view',$isi);
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
		$this->load->view('datapenduduk/infokependudukan/addpenduduk_view');
		$this->load->view('footer');
		}
		else{
			header("location: ".base_url().'login');
		}
	}

	public function delete_by_id($noktp)
	{
		$this->db->delete('tbl_infokependudukan', array('no_ktp' => $noktp));
		redirect('Infokependudukan');
	}

	public function detail()
	{
		$cek = $this->session->userdata('status');
		if($cek == 'admin'){
			$this->load->view('header');
		$this->load->view('datapenduduk/infokependudukan/detail_view');
		$this->load->view('footer');
		}
		else{
			header("location: ".base_url().'login');
		}
	}


	public function simpan()
	{
		$data['nama_lengkap'] = $this->input->post('nama_lengkap');
		$data['nik'] = $this->input->post('nik');
		$data['no_kk'] = $this->input->post	('no_kk');
	  $data['no_ktp'] = $this->input->post('no_ktp');
		$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
		$data['usia'] = $this->input->post('usia');
	  $data['st_kk'] = $this->input->post('st_kk');
	  $data['st_pernikahan'] = $this->input->post('st_pernikahan');
	  $data['no_ktp_pasangan'] = $this->input->post('no_ktp_pasangan');
	  $data['tempat_lahir'] = $this->input->post('tempat_lahir');
	  $data['tgl_lahir'] = $this->input->post('tgl_lahir');
	  $data['alamat'] = $this->input->post('alamat');
	  $data['kd_pos'] = $this->input->post('kd_pos');
	  $data['no_telp'] = $this->input->post('no_telp');
	  $data['agama'] = $this->input->post('agama');
		$data['pendidikan'] = $this->input->post('pendidikan');
	  $data['pekerjaan'] = $this->input->post('pekerjaan');
	  $data['penghasilan'] = $this->input->post('penghasilan');
	  $data['kewarganegaraan'] = $this->input->post('kewarganegaraan');
		$data['disabilitas'] = $this->input->post('disabilitas');
	  $data['gol_darah'] = $this->input->post('gol_darah');
	  $data['nik_ayah'] = $this->input->post('nik_ayah');
	  $data['nama_ayah'] = $this->input->post('nama_ayah');
		$data['tp_lahir_ayah'] = $this->input->post('tp_lahir_ayah');
		$data['negara_ayah'] = $this->input->post('negara_ayah');
	  $data['agama_ayah'] = $this->input->post('agama_ayah');
	  $data['pekerjaan_ayah'] = $this->input->post('pekerjaan_ayah');
	  $data['alamat_ayah'] = $this->input->post('alamat_ayah');
		$data['nik_ibu'] = $this->input->post('nik_ibu');
		$data['nama_ibu'] = $this->input->post('nama_ibu');
		$data['tp_lahir_ibu'] = $this->input->post('tp_lahir_ibu');
		$data['negara_ibu'] = $this->input->post('negara_ibu');
		$data['agama_ibu'] = $this->input->post('agama_ibu');
		$data['pekerjaan_ibu'] = $this->input->post('pekerjaan_ibu');
		$data['alamat_ibu'] = $this->input->post('alamat_ibu');
		$data['tgl_penginputan'] = date("Y-m-d");
		$this->db->insert('tbl_infokependudukan',$data);
		redirect('Infokependudukan');
	}
}
