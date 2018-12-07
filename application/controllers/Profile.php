<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
				$cek = $this->session->userdata('status');
				if($cek == 'admin'){
					$this->db->from('tbl_datapegawai');
					$this->db->where('nip', $this->session->userdata('nip'));
					$datax['data'] = $this->db->get();
					$this->load->view('header');
					$this->load->view('profile_view',$datax);
					$this->load->view('footer');
				}
				else{
					header("location: ".base_url().'login');
				}
	}

	public function update($nip)
	{
		$data['nama'] = $this->input->post('nama');
		$data['jeniskelamin'] = $this->input->post('jk');
		$data['usia'] = $this->input->post('usia');
	  $data['telp'] = $this->input->post('no_telp');
		$data['tempat_lahir'] = $this->input->post('tmpt');
		$data['tgl_lahir'] = $this->input->post('tgl_lahir');
		$data['email'] = $this->input->post('email');

		$this->load->library('upload');
        $nmfile = "pegawai_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
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
        }

		$data['foto'] = $nmfile;
		$this->db->set($data);
		$this->db->where('nip', $nip);
		$this->db->update('tbl_datapegawai');
		redirect('Profile');
	}
}
