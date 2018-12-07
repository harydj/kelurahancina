<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembuatanktp extends CI_Controller {

	public function index()
	{
		$isi['data'] = $this->db->get('tbl_ektp');
		$cek = $this->session->userdata('status');
		if($cek == 'admin'){
			$this->load->view('header');
		$this->load->view('buatktp/data_view',$isi);
		$this->load->view('footer');
		}
		else{
			header("location: ".base_url().'login');
		}
	}

  public function post($nik)
	{
		$this->db->from('tbl_ektp');
		$this->db->where('nik', $nik);
		$isi['data'] = $this->db->get();
		$cek = $this->session->userdata('status');
		if($cek == 'admin'){
			$this->load->view('header');
		$this->load->view('buatktp/post',$isi);
		$this->load->view('footer');
		}
		else{
			header("location: ".base_url().'login');
		}
	}

	public function delete_by_id($nik)
	{
		$this->db->delete('tbl_ektp', array('nik' => $nik));
		$this->db->delete('tbl_ceksurat', array('nik' => $nik));
		redirect('Pembuatanktp');
	}

	public function simpan()
	{
		$data['nama'] = $this->input->post('nama');
		$data['nik'] = $this->input->post('nik');
		$data['no_surat'] = $this->input->post('nosrt');
		$data['ttd_pejabat'] = $this->input->post('ttd');
		$data['tgl_pengajuan'] = date("m/d/Y");
		$data['status'] = "Proses";
		$data1['nama'] = $this->input->post('nama');
		$data1['nik'] = $this->input->post('nik');
		$data1['no_surat'] = $this->input->post('nosrt');
		$data1['tgl_pengajuan'] = date("Y-m-d");
		$data1['jenis_surat'] = "Surat Pengantar";
		$data1['status'] = "Proses";
		$this->db->insert('tbl_ektp',$data);
		$this->db->insert('tbl_ceksurat',$data1);
		redirect('Pembuatanktp');
	}

	public function simpan_c()
	{
		$data['nama'] = $this->input->post('nama');
		$data['nik'] = $this->input->post('nik');
		$data['no_surat'] = " ";
		$data['ttd_pejabat'] = " ";
		$data['tgl_pengajuan'] = date("m/d/Y");
		$data['status'] = "Pengajuan Baru";
		$data1['nama'] = $this->input->post('nama');
		$data1['nik'] = $this->input->post('nik');
		$data1['no_surat'] = " ";
		$data1['tgl_pengajuan'] = date("Y-m-d");
		$data1['jenis_surat'] = "Surat Pengantar";
		$data1['status'] = "Pengajuan Baru";
		$this->db->insert('tbl_ektp',$data);
		$this->db->insert('tbl_ceksurat',$data1);
		if($cek == 'admin'){
			redirect('Pembuatanktp');
		}
		else{
			redirect('Layananpublik/pktp');
		}
	}

	public function update($nik)
	{
		$data['nama'] = $this->input->post('nama');
		$data['nik'] = $this->input->post('nik');
		$data['no_surat'] = $this->input->post('nosrt');
		$data['ttd_pejabat'] = $this->input->post('ttd');
		$data['tgl_pengajuan'] = $this->input->post('tgl_pengajuan');
		$data['status'] = $this->input->post('status');
		$data1['nama'] = $this->input->post('nama');
		$data1['nik'] = $this->input->post('nik');
		$data1['no_surat'] = $this->input->post('nosrt');
		$data1['tgl_pengajuan'] = $this->input->post('tgl_pengajuan');
		$data1['status'] = $this->input->post('status');
		$this->db->set($data);
		$this->db->where('nik', $nik);
		$this->db->update('tbl_ektp');
		$this->db->set($data1);
		$this->db->where('nik', $nik);
		$this->db->update('tbl_ceksurat');
		redirect('Pembuatanktp');
	}

	function __construct()
	{
			parent::__construct();
			$this->load->library("Pdf");
	}



	public function create_pdf($nik) {

	$this->db->from('tbl_ektp');
	$this->db->where('nik', $nik);
	$isi = $this->db->get();


	// create new PDF document
	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

	// set document information
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('Muhammad Saqlain Arif');
	$pdf->SetTitle('TCPDF Example 001');
	$pdf->SetSubject('TCPDF Tutorial');
	$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

	// set default header data
	$PDF_HEADER_LOGO = "logokel.png";//any image file. check correct path.
	$PDF_HEADER_LOGO_WIDTH = "18";
	$PDF_HEADER_TITLE = "PEMERINTAH  KABUPATEN WAJO KECAMATAN PAMMANA";
	$PDF_HEADER_STRING = "KELURAHAN CINA\n"
	. "Kelurahan Cina, Kabupaten Wajo, Sulawesi Selatan\n";
	$pdf->SetHeaderData($PDF_HEADER_LOGO, $PDF_HEADER_LOGO_WIDTH, $PDF_HEADER_TITLE, $PDF_HEADER_STRING);
	$pdf->setPrintFooter(false);

	// set header and footer fonts
	$pdf->setHeaderFont(Array("times", '', "14"));
	$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

	// set default monospaced font
	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

	// set margins
	$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
	$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

	// set auto page breaks
	$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

	// set image scale factor
	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

	// set some language-dependent strings (optional)
	if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
			require_once(dirname(__FILE__).'/lang/eng.php');
			$pdf->setLanguageArray($l);
	}

	// ---------------------------------------------------------

	// set default font subsetting mode
	$pdf->setFontSubsetting(true);

	// Set font
	// dejavusans is a UTF-8 Unicode font, if you only need to
	// print standard ASCII chars, you can use core fonts like
	// helvetica or times to reduce file size.
	$pdf->SetFont('times', '', 11, '', true);

	// Add a page
	// This method has several options, check the source code documentation for more information.
	$pdf->AddPage();

	// set text shadow effect
	$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

	// Set some content to print
	$html = "<br><h1>Surat Pengantar Pembuatan KTP</h1>";
	foreach ($isi->result() as $row) {
	$surat = "Nomor : KCN/".$row->no_surat."/2/2017<br>";
	}
	$isi = "<br><br> Yang bertanda tangan di bawah ini Kepala Kelurahan Cina, Kecamatan Pamman, Kabupaten Wajo, Provinsi Sulawesi Selatan menerangkan dengan sebenarnya bahwa :";
	$isi2 = "<br><br><ol><ol><li>Nama Lengkap	:	".$row->nama."</li><br><li>Nomor Induk :	".$row->nik."</li></ol>";
	$isi3 = "<br><br><br><br>Orang tersebut di atas adalah benar-benar warga Kelurahan Cina yang saat ini Kartu Tanda Penduduk sedang dalam proses.";
	$isi4 = "<br><br>Demikian surat keterangan ini dibuat dengan sesungguhnya untuk dipergunakan sebagaimana mestinya.";
	$ttd = "<br><br><br><br><br><br><br><br><ol><ol><ol><ol><ol><ol><ol><ol><ol><ol><ol>Kelurahan Cina, ".$row->tgl_pengajuan."<br><br>  Kepala Kelurahan Cina<br><br><br><br><ol>".$row->ttd_pejabat;
	// Print text using writeHTMLCell()
	$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, 'C', true);
	$pdf->writeHTMLCell(0, 0, '', '', $surat, 0, 1, 0, true, 'C', true);
	$pdf->writeHTML($isi, true, false, true, false, '');
	$pdf->writeHTML($isi2, true, false, true, false, '');
	$pdf->writeHTML($isi3, true, false, true, false, '');
	$pdf->writeHTML($isi4, true, false, true, false, '');
	$pdf->writeHTML($ttd, true, false, true, false, '');

	// ---------------------------------------------------------

	// Close and output PDF document
	// This method has several options, check the source code documentation for more information.
	$pdf->Output('suratketktp.pdf', 'I');

	//============================================================+
	// END OF FILE
	//============================================================+
	}

	}
