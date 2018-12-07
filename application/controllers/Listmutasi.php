<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listmutasi extends CI_Controller {

	public function index()
	{
		$isi['data'] = $this->db->get('tbl_listmutasi');
		$cek = $this->session->userdata('status');
		if($cek == 'admin'){
			$this->load->view('header');
		$this->load->view('mutasi/datamutasi/listmutasi',$isi);
		$this->load->view('footer');
		}
		else{
			header("location: ".base_url().'login');
		}
	}

	public function delete_by_id($nik)
	{
		$isi = $this->db->get('tbl_mutasidatang');
		$isi1 = $this->db->get('tbl_mutasikeluar');
		foreach ($isi->result() as $row) {
			if($row->nik == $nik){
				$this->db->delete('tbl_mutasidatang', array('nik' => $nik));
				$this->db->delete('tbl_listmutasi', array('nik' => $nik));
			}
		}
		foreach ($isi1->result() as $row1) {
			if($row1->nik == $nik){
				$this->db->delete('tbl_mutasikeluar', array('nik' => $nik));
				$this->db->delete('tbl_listmutasi', array('nik' => $nik));
			}
		}
		redirect('Listmutasi');
	}

	public function edit($nik)
	{
		$isi = $this->db->get('tbl_mutasidatang');
		$isi1 = $this->db->get('tbl_mutasikeluar');
		$cek = $this->session->userdata('status');
		foreach ($isi->result() as $row) {
			if($row->nik == $nik){
				if($cek == 'admin'){
					$this->db->from('tbl_mutasidatang');
					$this->db->where('nik', $nik);
					$datax['data'] = $this->db->get();
					$this->load->view('header');
					$this->load->view('mutasi/datamutasi/edit_m_datang',$datax);
					$this->load->view('footer');
				}
				else{
					header("location: ".base_url().'login');
				}
			}
		}
		foreach ($isi1->result() as $row1) {
			if($row1->nik == $nik){
				if($cek == 'admin'){
					$this->db->from('tbl_mutasikeluar');
					$this->db->where('nik', $nik);
					$datay['data'] = $this->db->get();
					$this->load->view('header');
					$this->load->view('mutasi/datamutasi/edit_m_pindah',$datay);
					$this->load->view('footer');
				}
				else{
					header("location: ".base_url().'login');
				}
			}
		}

	}
}
