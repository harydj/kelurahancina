<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datapegawai extends CI_Controller {

	public function index()
	{
		$isi['data'] = $this->db->get('tbl_datapegawai');
		$cek = $this->session->userdata('status');
		if($cek == 'admin'){
			$this->load->view('header');
			$this->load->view('datakelurahan/datapegawai/datapegawai_view',$isi);
			$this->load->view('footer');
		}
		else{
			header("location: ".base_url().'login');
		}
	}

	public function delete_by_id($nip)
	{
		$this->db->delete('tbl_datapegawai', array('nip' => $nip));
		$this->db->delete('tbl_admin', array('nip' => $nip));
		redirect('Datapegawai');
	}

	public function detail($nip)
	{
		$this->db->from('tbl_datapegawai a');
		$this->db->join('tbl_admin b','b.nip=a.nip','left');
		$this->db->where('b.nip', $nip);
		$isi['data'] = $this->db->get();
		$cek = $this->session->userdata('status');
		if($cek == 'admin'){
			$this->load->view('header');
			$this->load->view('datakelurahan/datapegawai/detailpegawai_view',$isi);
			$this->load->view('footer');
		}
		else{
			header("location: ".base_url().'login');
		}
	}

	public function simpan()
	{
		$data['nama'] = $this->input->post('namalengkap');
		$data['nip'] = $this->input->post('nip');
		$data['jeniskelamin'] = $this->input->post('jk');
		$data['usia'] = $this->input->post('usia');
	  $data['telp'] = $this->input->post('notelp');
		$data['tempat_lahir'] = $this->input->post('tempat_lahir');
		$data['tgl_lahir'] = $this->input->post('tgl_lahir');
		$data['email'] = $this->input->post('email');
		$data1['nip'] = $this->input->post('nip');
		$data1['username'] = $this->input->post('username');
		$data1['password'] = md5($this->input->post('password'));
		$data1['status'] = 'admin';

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
		$this->db->insert('tbl_datapegawai',$data);
		$this->db->insert('tbl_admin',$data1);


		redirect('Datapegawai');
	}



	}
