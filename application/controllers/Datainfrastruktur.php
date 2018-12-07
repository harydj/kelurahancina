<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datainfrastruktur extends CI_Controller {

	public function index()
	{
		$isi['data'] = $this->db->get('tbl_datainfrastruktur');
		$cek = $this->session->userdata('status');
		if($cek == 'admin'){
			$this->load->view('header');
		$this->load->view('datakelurahan/datainfrastruktur_view',$isi);
		$this->load->view('footer');
		}
		else{
			header("location: ".base_url().'login');
		}
	}

		public function simpan()
		{
			$data['kode_aset'] = $this->input->post('kodeaset');
			$data['nama_aset'] = $this->input->post('namaaset');
			$data['jumlah'] = $this->input->post('jum');
			$data['harga'] = $this->input->post('harga');
			$data['tgl_pembelian'] = $this->input->post('tgl');
			$data['kondisi'] = $this->input->post('kondisi');
			$this->db->insert('tbl_datainfrastruktur',$data);
			redirect('Datainfrastruktur');
		}

		public function delete_by_id($kode)
		{
			$this->db->delete('tbl_datainfrastruktur', array('kode_aset' => $kode));
			redirect('Datainfrastruktur');
		}
}
