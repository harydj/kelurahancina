<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layananpublik extends CI_Controller {

	public function index()
	{
		$this->load->view('header_hp');
		$this->load->view('homeservices/layananpublik_view');
		$this->load->view('footer_hp');
	}

	public function pktp()
	{
		$this->load->view('header_hp');
		$this->load->view('homeservices/layanansurat/p_ktp');
		$this->load->view('footer_hp');
	}

	public function paktekelahiran()
	{
		$this->load->view('header_hp');
		$this->load->view('homeservices/layanansurat/p_aktekelahiran');
		$this->load->view('footer_hp');
	}

	public function pnikah()
	{
		$this->load->view('header_hp');
		$this->load->view('homeservices/layanansurat/p_nikah');
		$this->load->view('footer_hp');
	}

	public function pkehilangan()
	{
		$this->load->view('header_hp');
		$this->load->view('homeservices/layanansurat/p_kehilangan');
		$this->load->view('footer_hp');
	}

	public function pbeasiswa()
	{
		$this->load->view('header_hp');
		$this->load->view('homeservices/layanansurat/p_beasiswa');
		$this->load->view('footer_hp');
	}

	public function kdomisili()
	{
		$this->load->view('header_hp');
		$this->load->view('homeservices/layanansurat/k_domisili');
		$this->load->view('footer_hp');
	}

	public function kbelumnikah()
	{
		$this->load->view('header_hp');
		$this->load->view('homeservices/layanansurat/k_blmnikah');
		$this->load->view('footer_hp');
	}

	public function ktidakmampu()
	{
		$this->load->view('header_hp');
		$this->load->view('homeservices/layanansurat/k_tdkmampu');
		$this->load->view('footer_hp');
	}

	public function kkematian()
	{
		$this->load->view('header_hp');
		$this->load->view('homeservices/layanansurat/k_kematian');
		$this->load->view('footer_hp');
	}

	public function kumum()
	{
		$this->load->view('header_hp');
		$this->load->view('homeservices/layanansurat/k_umum');
		$this->load->view('footer_hp');
	}
	public function kusaha()
	{
		$this->load->view('header_hp');
		$this->load->view('homeservices/layanansurat/k_usaha');
		$this->load->view('footer_hp');
	}
}
