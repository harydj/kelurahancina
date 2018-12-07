<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datakematian extends CI_Controller {



	public function index()
	{
		$isi['data'] = $this->db->get('tbl_datakematian');
		$cek = $this->session->userdata('status');
		if($cek == 'admin'){
			$this->load->view('header');
		$this->load->view('datapenduduk/datakematian/datakematian_view',$isi);
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
		$this->load->view('datapenduduk/datakematian/adddatakematian_view');
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
		$this->load->view('datapenduduk/datakematian/detaildatakematian_view');
		$this->load->view('footer');
		}
		else{
			header("location: ".base_url().'login');
		}
	}

	public function delete_by_id($nokk)
	{
		$this->db->delete('tbl_datakematian', array('no_kk' => $nokk));
		redirect('Datakematian');
	}

	public function simpan()
	{
		$data['no_kk'] = $this->input->post	('no_kk');
		$data['nama_lengkap'] = $this->input->post('nama_lengkap');
		$data['no_ktp'] = $this->input->post('no_ktp');
		$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
		$data['st_kk'] = $this->input->post('st_kk');
		$data['st_pernikahan'] = $this->input->post('st_pernikahan');
		$data['no_ktp_pasangan'] = $this->input->post('no_ktp_pasangan');
		$data['tempat_lahir'] = $this->input->post('tempat_lahir');
		$data['tgl_lahir'] = $this->input->post('tgl_lahir');
		$data['alamat'] = $this->input->post('alamat');
		$data['agama'] = $this->input->post('agama');
		$data['pendidikan'] = $this->input->post('pendidikan');
		$data['pekerjaan'] = $this->input->post('pekerjaan');
		$data['kewarganegaraan'] = $this->input->post('kewarganegaraan');
		$data['disabilitas'] = $this->input->post('disabilitas');
		$data['gol_darah'] = $this->input->post('gol_darah');
		$data['nik_ayah'] = $this->input->post('nik_ayah');
		$data['nama_ayah'] = $this->input->post('nama_ayah');
		$data['nik_ibu'] = $this->input->post('nik_ibu');
		$data['nama_ibu'] = $this->input->post('nama_ibu');
		$data['tempat_meninggal'] = $this->input->post('tp_meninggal');
		$data['sebab_meninggal'] = $this->input->post('sebab_meninggal');
		$data['tgl_meninggal'] = $this->input->post('tgl_meninggal');
		$this->db->insert('tbl_datakematian',$data);
		redirect('Datakematian');
	}
}
