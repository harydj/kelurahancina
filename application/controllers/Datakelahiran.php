<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datakelahiran extends CI_Controller {



	public function index()
	{
	  $isi['data'] = $this->db->get('tbl_datakelahiran');
		$cek = $this->session->userdata('status');
		if($cek == 'admin'){
			$this->load->view('header');
		$this->load->view('datapenduduk/datakelahiran/datakelahiran_view',$isi);
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
		$this->load->view('datapenduduk/datakelahiran/adddatakelahiran_view');
		$this->load->view('footer');
		}
		else{
			header("location: ".base_url().'login');
		}
	}

	public function detail()
	{
		$cek = $this->session->userdata('status');
		if($cek == 'admin'){
			$this->load->view('header');
		$this->load->view('datapenduduk/datakelahiran/detaildatakelahiran_view');
		$this->load->view('footer');
		}
		else{
			header("location: ".base_url().'login');
		}
	}

	public function delete_by_id($nokk)
	{
		$this->db->delete('tbl_datakelahiran', array('no_kk' => $nokk));
		redirect('Datakelahiran');
	}

	public function simpan()
	{
		$data['nama_lengkap'] = $this->input->post('nama');
		$data['no_kk'] = $this->input->post	('no_kk');
		$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
		$data['st_kk'] = $this->input->post('skk');
		$data['tempat_lahir'] = $this->input->post('tp_lahir');
		$data['tgl_lahir'] = $this->input->post('tgl_lahir');
		$data['alamat'] = $this->input->post('alamat');
		$data['agama'] = $this->input->post('agama');
		$data['kewarganegaraan'] = $this->input->post('kwn');
		$data['disabilitas'] = $this->input->post('dsbl');
		$data['gol_darah'] = $this->input->post('gdr');
		$data['nik_ayah'] = $this->input->post('nik_ayah');
		$data['nama_ayah'] = $this->input->post('nama_ayah');
		$data['tp_lahir_ayah'] = $this->input->post('tp_lahir_ayah');
		$data['tgl_lahir_ayah'] = $this->input->post('tgl_lahir_ayah');
		$data['negara_ayah'] = $this->input->post('negara_ayah');
		$data['agama_ayah'] = $this->input->post('agama_ayah');
		$data['pekerjaan_ayah'] = $this->input->post('pekerjaan_ayah');
		$data['alamat_ayah'] = $this->input->post('alamat_ayah');
		$data['nik_ibu'] = $this->input->post('nik_ibu');
		$data['nama_ibu'] = $this->input->post('nama_ibu');
		$data['tp_lahir_ibu'] = $this->input->post('tp_lahir_ibu');
		$data['tgl_lahir_ibu'] = $this->input->post('tgl_lahir_ibu');
		$data['negara_ibu'] = $this->input->post('negara_ibu');
		$data['agama_ibu'] = $this->input->post('agama_ibu');
		$data['pekerjaan_ibu'] = $this->input->post('pekerjaan_ibu');
		$data['alamat_ibu'] = $this->input->post('alamat_ibu');
		$this->db->insert('tbl_datakelahiran',$data);
		redirect('Datakelahiran');
	}
}
