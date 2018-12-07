<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infokelurahan extends CI_Controller {

	public function index()
	{
		$isi['data'] = $this->db->get('tbl_infokelurahan');
		$cek = $this->session->userdata('status');
		if($cek == 'admin'){
			$this->load->view('header');
			$this->load->view('datakelurahan/infokelurahan_view',$isi);
			$this->load->view('footer');
		}
		else{
			header("location: ".base_url().'login');
		}
	}

	public function simpan()
	{
		$data['judul'] = $this->input->post('judul');
		$data['isi'] = $this->input->post('isi');
		$data['penulis'] = $this->session->userdata('username');
	  $data['tanggal'] = date("Y-m-d H:i:s");
		$data['time'] = time();

		$this->load->library('upload');
        $nmfile = "info_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/img/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|PNG'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '20048'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

				$this->upload->initialize($config);

        if($_FILES['filefoto']['name'])
        {
						$this->upload->do_upload('filefoto');
            $gbr = $this->upload->data();
						$namagambar = $gbr['file_name'];
        }

		$data['gambar'] = $namagambar;


		if (isset($_POST['publish'])){
			$data['status'] = "publish";
		}else{
			$data['status'] = "draft";
		}
		$this->db->insert('tbl_infokelurahan',$data);
		redirect('Infokelurahan');
	}

	public function update($id)
	{
		$data['judul'] = $this->input->post('judul');
		$data['isi'] = $this->input->post('isi');
		$data['penulis'] = $this->session->userdata('username');
		$data['tanggal'] = date("Y-m-d H:i:s");
		$data['time'] = time();

		$this->load->library('upload');
        $nmfile = "info_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/img/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

				$this->upload->initialize($config);

        if($_FILES['filefoto']['name'])
        {
						$this->upload->do_upload('filefoto');
            $gbr = $this->upload->data();
						$namagambar = $gbr['file_name'];
        }

		$data['gambar'] = $namagambar;



		if (isset($_POST['publish'])){
			$data['status'] = "publish";
		}else{
			$data['status'] = "draft";
		}
		$this->db->set($data);
		$this->db->where('id', $id);
		$this->db->update('tbl_infokelurahan');
		redirect('Infokelurahan');
	}

	public function delete_by_id($id)
	{
		$this->db->delete('tbl_infokelurahan', array('id' => $id));
		redirect('Infokelurahan');
	}


	public function editpost($id)
	{
		$this->db->from('tbl_infokelurahan');
		$this->db->where('id', $id);
		$isi['data'] = $this->db->get();
		$cek = $this->session->userdata('status');
		if($cek == 'admin'){
			$this->load->view('header');
			$this->load->view('datakelurahan/edit_infokelurahan',$isi);
			$this->load->view('footer');
		}
		else{
			header("location: ".base_url().'login');
		}
	}
}
