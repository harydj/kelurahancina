<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$isi['data'] = $this->db->get('tbl_infokependudukan');
		$isi['data1'] = $this->db->get('tbl_ceksurat');
		$isi['data2'] = $this->db->get('tbl_datapegawai');
		$isi['data3'] = $this->db->get('tbl_datainfrastruktur');
		$this->db->select('*');
		$this->db->from('tbl_pengaduan');
		$this->db->order_by("waktu_input","desc");
		$this->db->limit(2);
		$isi['data4'] = $this->db->get();
		$isi1['data'] = $this->db->query('SELECT * FROM tbl_infokependudukan WHERE MONTH(`tgl_penginputan`) = 1 AND YEAR(`tgl_penginputan`) = YEAR(CURDATE())');
		$isi1['data1'] = $this->db->query('SELECT * FROM tbl_infokependudukan WHERE MONTH(`tgl_penginputan`) = 2 AND YEAR(`tgl_penginputan`) = YEAR(CURDATE())');
		$isi1['data2'] = $this->db->query('SELECT * FROM tbl_infokependudukan WHERE MONTH(`tgl_penginputan`) = 3 AND YEAR(`tgl_penginputan`) = YEAR(CURDATE())');
		$isi1['data3'] = $this->db->query('SELECT * FROM tbl_infokependudukan WHERE MONTH(`tgl_penginputan`) = 4 AND YEAR(`tgl_penginputan`) = YEAR(CURDATE())');
		$isi1['data4'] = $this->db->query('SELECT * FROM tbl_infokependudukan WHERE MONTH(`tgl_penginputan`) = 5 AND YEAR(`tgl_penginputan`) = YEAR(CURDATE())');
		$isi1['data5'] = $this->db->query('SELECT * FROM tbl_infokependudukan WHERE MONTH(`tgl_penginputan`) = 6 AND YEAR(`tgl_penginputan`) = YEAR(CURDATE())');
		$isi1['data6'] = $this->db->query('SELECT * FROM tbl_infokependudukan WHERE MONTH(`tgl_penginputan`) = 7 AND YEAR(`tgl_penginputan`) = YEAR(CURDATE())');
		$isi1['data7'] = $this->db->query('SELECT * FROM tbl_ceksurat WHERE MONTH(`tgl_pengajuan`) = 1 AND YEAR(`tgl_pengajuan`) = YEAR(CURDATE())');
		$isi1['data8'] = $this->db->query('SELECT * FROM tbl_ceksurat WHERE MONTH(`tgl_pengajuan`) = 2 AND YEAR(`tgl_pengajuan`) = YEAR(CURDATE())');
		$isi1['data9'] = $this->db->query('SELECT * FROM tbl_ceksurat WHERE MONTH(`tgl_pengajuan`) = 3 AND YEAR(`tgl_pengajuan`) = YEAR(CURDATE())');
		$isi1['data10'] = $this->db->query('SELECT * FROM tbl_ceksurat WHERE MONTH(`tgl_pengajuan`) = 4 AND YEAR(`tgl_pengajuan`) = YEAR(CURDATE())');
		$isi1['data11'] = $this->db->query('SELECT * FROM tbl_ceksurat WHERE MONTH(`tgl_pengajuan`) = 5 AND YEAR(`tgl_pengajuan`) = YEAR(CURDATE())');
		$isi1['data12'] = $this->db->query('SELECT * FROM tbl_ceksurat WHERE MONTH(`tgl_pengajuan`) = 6 AND YEAR(`tgl_pengajuan`) = YEAR(CURDATE())');
		$isi1['data13'] = $this->db->query('SELECT * FROM tbl_ceksurat WHERE MONTH(`tgl_pengajuan`) = 7 AND YEAR(`tgl_pengajuan`) = YEAR(CURDATE())');
		$cek = $this->session->userdata('status');
		if($cek == 'admin'){
			$this->load->view('header');
		$this->load->view('admin_view',$isi);
		$this->load->view('footers',$isi1);
		}
		else{
			header("location: ".base_url().'login');
		}
	}
}
