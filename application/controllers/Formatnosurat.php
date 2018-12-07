<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formatnosurat extends CI_Controller {

	public function index()
	{
		$isi['data'] = $this->db->get('tbl_formatnosurat');
		$cek = $this->session->userdata('status');
		if($cek == 'admin'){
			$this->load->view('header');
		$this->load->view('datakelurahan/formatnosurat_view',$isi);
		$this->load->view('footer');
		}
		else{
			header("location: ".base_url().'login');
		}
	}

	public function delete_by_id($id)
	{
		$this->db->delete('tbl_formatnosurat', array('id' => $id));
		redirect('Formatnosurat');
	}
}
