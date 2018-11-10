<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_rangking extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('admin/M_rangking');
		$this->load->model('admin/M_kecamatan');
		$this->load->model('admin/M_desa');
		$this->load->model('admin/M_alamat');

		if ($this->session->userdata("LEVEL")!='Admin') {
			redirect("C_login");
		}
	}

	public function index() {
		$this->load->view('admin/data_penilaian/rangking/v_rangking');
	}
	//----------------------------banyuates---------------------------//
	public function data_banyuates()
	{
		$data["data_banyuates"] = $this->M_rangking->data_banyuates();
		$this->load->view('admin/data_penilaian/rangking/banyuates/banyuates',$data);
	}
	public function banyuates()
	{
		$data["banyuates"] = $this->M_rangking->banyuates();
		$this->load->view('admin/data_penilaian/rangking/banyuates/r_banyuates',$data);
	}
	public function detail_banyuates($ID_KELUARGA)
	{
		$data['v_penilaian'] = $this->M_rangking->get_by($ID_KELUARGA);
		$data['KEC_ID'] = $this->M_kecamatan->get_by($data['v_penilaian']->KEC_ID)->KEC_NAMA;
		$data['DES_ID'] = $this->M_desa->get_by($data['v_penilaian']->DES_ID)->DES_NAMA;
		$data['DUS_ID'] = $this->M_alamat->get_by($data['v_penilaian']->DUS_ID)->DUS_NAMA;
		$this->load->view('admin/data_penilaian/rangking/banyuates/detail_banyuates', $data);
	}
	function export_excel_rangking_banyuates() {

		$data ["banyuates"] = $this->M_rangking->banyuates();
		$this->load->view('admin/data_penilaian/rangking/banyuates/export_excel_rangking_banyuates', $data);
    }
    function export_pdf_rangking_banyuates() {
        $this->load->helper(array('dompdf', 'file'));
        ini_set('memory_limit', '1280M');

        $data ["banyuates"] = $this->M_rangking->banyuates();
		$filename='DATA RANGKING KELUARGA MISKIN KEC.BANYUATES';
        $html = $this->load->view('admin/data_penilaian/rangking/banyuates/export_pdf_rangking_banyuates', $data, true);
        pdf_create($html, $filename, 'A4', 'potrait');
    }
	//--------------------------camplong------------------------------//
	public function data_camplong()
	{
		$data["data_camplong"] = $this->M_rangking->data_camplong();
		$this->load->view('admin/data_penilaian/rangking/camplong/camplong',$data);
	}
	public function camplong()
	{
		$data["camplong"] = $this->M_rangking->camplong();
		$this->load->view('admin/data_penilaian/rangking/camplong/r_camplong',$data);
	}
	public function detail_camplong($ID_KELUARGA)
	{
		$data['v_penilaian'] = $this->M_rangking->get_by($ID_KELUARGA);
		$data['KEC_ID'] = $this->M_kecamatan->get_by($data['v_penilaian']->KEC_ID)->KEC_NAMA;
		$data['DES_ID'] = $this->M_desa->get_by($data['v_penilaian']->DES_ID)->DES_NAMA;
		$data['DUS_ID'] = $this->M_alamat->get_by($data['v_penilaian']->DUS_ID)->DUS_NAMA;
		$this->load->view('admin/data_penilaian/rangking/camplong/detail_camplong',$data);
	}
	function export_excel_rangking_camplong() {

		$data ["camplong"] = $this->M_rangking->camplong();
		$this->load->view('admin/data_penilaian/rangking/camplong/export_excel_rangking_camplong', $data);
    }
    function export_pdf_rangking_camplong() {
        $this->load->helper(array('dompdf', 'file'));
        ini_set('memory_limit', '1280M');

        $data ["camplong"] = $this->M_rangking->camplong();
		$filename='DATA RANGKING KELUARGA MISKIN KEC.CAMPLONG';
        $html = $this->load->view('admin/data_penilaian/rangking/camplong/export_pdf_rangking_camplong', $data, true);
        pdf_create($html, $filename, 'A4', 'potrait');
    }
	//-------------------------jrengik---------------------------------//
	public function data_jrengik()
	{
		$data["data_jrengik"] = $this->M_rangking->data_jrengik();
		$this->load->view('admin/data_penilaian/rangking/jrengik/jrengik',$data);
	}
	public function jrengik()
	{
		$data["jrengik"] = $this->M_rangking->jrengik();
		$this->load->view('admin/data_penilaian/rangking/jrengik/r_jrengik',$data);
	}
	public function detail_jrengik($ID_KELUARGA)
	{
		$data['v_penilaian'] = $this->M_rangking->get_by($ID_KELUARGA);
		$data['KEC_ID'] = $this->M_kecamatan->get_by($data['v_penilaian']->KEC_ID)->KEC_NAMA;
		$data['DES_ID'] = $this->M_desa->get_by($data['v_penilaian']->DES_ID)->DES_NAMA;
		$data['DUS_ID'] = $this->M_alamat->get_by($data['v_penilaian']->DUS_ID)->DUS_NAMA;
		$this->load->view('admin/data_penilaian/rangking/jrengik/detail_jrengik',$data);
	}
	function export_excel_rangking_jrengik() {

		$data ["jrengik"] = $this->M_rangking->jrengik();
		$this->load->view('admin/data_penilaian/rangking/jrengik/export_excel_rangking_jrengik', $data);
    }
    function export_pdf_rangking_jrengik() {
        $this->load->helper(array('dompdf', 'file'));
        ini_set('memory_limit', '1280M');

        $data ["jrengik"] = $this->M_rangking->jrengik();
		$filename='DATA RANGKING KELUARGA MISKIN KEC.JRENGIK';
        $html = $this->load->view('admin/data_penilaian/rangking/jrengik/export_pdf_rangking_jrengik', $data, true);
        pdf_create($html, $filename, 'A4', 'potrait');
    }
	//-------------------------karangpenang---------------------------//
	public function data_karangpenang()
	{
		$data["data_karangpenang"] = $this->M_rangking->data_karangpenang();
		$this->load->view('admin/data_penilaian/rangking/karangpenang/karangpenang',$data);
	}
	public function karangpenang()
	{
		$data["karangpenang"] = $this->M_rangking->karangpenang();
		$this->load->view('admin/data_penilaian/rangking/karangpenang/r_karangpenang',$data);
	}
	public function detail_karangpenang($ID_KELUARGA)
	{
		$data['v_penilaian'] = $this->M_rangking->get_by($ID_KELUARGA);
		$data['KEC_ID'] = $this->M_kecamatan->get_by($data['v_penilaian']->KEC_ID)->KEC_NAMA;
		$data['DES_ID'] = $this->M_desa->get_by($data['v_penilaian']->DES_ID)->DES_NAMA;
		$data['DUS_ID'] = $this->M_alamat->get_by($data['v_penilaian']->DUS_ID)->DUS_NAMA;
		$this->load->view('admin/data_penilaian/rangking/karangpenang/detail_karangpenang',$data);
	}
	function export_excel_rangking_karangpenang() {

		$data ["karangpenang"] = $this->M_rangking->karangpenang();
		$this->load->view('admin/data_penilaian/rangking/karangpenang/export_excel_rangking_karangpenang', $data);
    }
    function export_pdf_rangking_karangpenang() {
        $this->load->helper(array('dompdf', 'file'));
        ini_set('memory_limit', '1280M');

        $data ["karangpenang"] = $this->M_rangking->karangpenang();
		$filename='DATA RANGKING KELUARGA MISKIN KEC.KARANGPENANG';
        $html = $this->load->view('admin/data_penilaian/rangking/karangpenang/export_pdf_rangking_karangpenang', $data, true);
        pdf_create($html, $filename, 'A4', 'potrait');
    }
	//-------------------------kedungdung--------------------------------//
	public function data_kedungdung()
	{
		$data["data_Kedungdung"] = $this->M_rangking->data_kedungdung();
		$this->load->view('admin/data_penilaian/rangking/kedungdung/kedungdung',$data);
	}
	public function kedungdung()
	{
		$data["Kedungdung"] = $this->M_rangking->kedungdung();
		$this->load->view('admin/data_penilaian/rangking/kedungdung/r_kedungdung',$data);
	}
	public function detail_kedungdung($ID_KELUARGA)
	{
		$data['v_penilaian'] = $this->M_rangking->get_by($ID_KELUARGA);
		$data['KEC_ID'] = $this->M_kecamatan->get_by($data['v_penilaian']->KEC_ID)->KEC_NAMA;
		$data['DES_ID'] = $this->M_desa->get_by($data['v_penilaian']->DES_ID)->DES_NAMA;
		$data['DUS_ID'] = $this->M_alamat->get_by($data['v_penilaian']->DUS_ID)->DUS_NAMA;
		$this->load->view('admin/data_penilaian/rangking/kedungdung/detail_kedungdung',$data);
	}
	function export_excel_rangking_kedungdung() {

		$data ["kedungdung"] = $this->M_rangking->kedungdung();
		$this->load->view('admin/data_penilaian/rangking/kedungdung/export_excel_rangking_kedungdung', $data);
    }
    function export_pdf_rangking_kedungdung() {
        $this->load->helper(array('dompdf', 'file'));
        ini_set('memory_limit', '1280M');

        $data ["kedungdung"] = $this->M_rangking->kedungdung();
		$filename='DATA RANGKING KELUARGA MISKIN KEC.KEDUNGDUNG';
        $html = $this->load->view('admin/data_penilaian/rangking/kedungdung/export_pdf_rangking_kedungdung', $data, true);
        pdf_create($html, $filename, 'A4', 'potrait');
    }
	//--------------------------ketapang--------------------------------------//
	public function data_ketapang()
	{
		$data["data_ketapang"] = $this->M_rangking->data_ketapang();
		$this->load->view('admin/data_penilaian/rangking/ketapang/ketapang',$data);
	}
	public function ketapang()
	{
		$data["ketapang"] = $this->M_rangking->ketapang();
		$this->load->view('admin/data_penilaian/rangking/ketapang/r_ketapang',$data);
	}
	public function detail_ketapang($ID_KELUARGA)
	{
		$data['v_penilaian'] = $this->M_rangking->get_by($ID_KELUARGA);
		$data['KEC_ID'] = $this->M_kecamatan->get_by($data['v_penilaian']->KEC_ID)->KEC_NAMA;
		$data['DES_ID'] = $this->M_desa->get_by($data['v_penilaian']->DES_ID)->DES_NAMA;
		$data['DUS_ID'] = $this->M_alamat->get_by($data['v_penilaian']->DUS_ID)->DUS_NAMA;
		$this->load->view('admin/data_penilaian/rangking/ketapang/detail_ketapang',$data);
	}
	function export_excel_rangking_ketapang() {

		$data ["ketapang"] = $this->M_rangking->ketapang();
		$this->load->view('admin/data_penilaian/rangking/ketapang/export_excel_rangking_ketapang', $data);
    }
    function export_pdf_rangking_ketapang() {
        $this->load->helper(array('dompdf', 'file'));
        ini_set('memory_limit', '1280M');

        $data ["ketapang"] = $this->M_rangking->ketapang();
		$filename='DATA RANGKING KELUARGA MISKIN KEC.KETAPANG';
        $html = $this->load->view('admin/data_penilaian/rangking/ketapang/export_pdf_rangking_ketapang', $data, true);
        pdf_create($html, $filename, 'A4', 'potrait');
    }
	//--------------------------omben---------------------------------------------//
	public function data_omben()
	{
		$data["data_omben"] = $this->M_rangking->data_omben();
		$this->load->view('admin/data_penilaian/rangking/omben/omben',$data);
	}
	public function omben()
	{
		$data["omben"] = $this->M_rangking->omben();
		$this->load->view('admin/data_penilaian/rangking/omben/r_omben',$data);
	}
	public function detail_omben($ID_KELUARGA)
	{
		$data['v_penilaian'] = $this->M_rangking->get_by($ID_KELUARGA);
		$data['KEC_ID'] = $this->M_kecamatan->get_by($data['v_penilaian']->KEC_ID)->KEC_NAMA;
		$data['DES_ID'] = $this->M_desa->get_by($data['v_penilaian']->DES_ID)->DES_NAMA;
		$data['DUS_ID'] = $this->M_alamat->get_by($data['v_penilaian']->DUS_ID)->DUS_NAMA;
		$this->load->view('admin/data_penilaian/rangking/omben/detail_omben',$data);
	}
	function export_excel_rangking_omben() {

		$data ["omben"] = $this->M_rangking->omben();
		$this->load->view('admin/data_penilaian/rangking/omben/export_excel_rangking_omben', $data);
    }
    function export_pdf_rangking_omben() {
        $this->load->helper(array('dompdf', 'file'));
        ini_set('memory_limit', '1280M');

        $data ["omben"] = $this->M_rangking->omben();
		$filename='DATA RANGKING KELUARGA MISKIN KEC.OMBEN';
        $html = $this->load->view('admin/data_penilaian/rangking/omben/export_pdf_rangking_omben', $data, true);
        pdf_create($html, $filename, 'A4', 'potrait');
    }
	//--------------------------pangarengan-------------------------------------//
	public function data_pangarengan()
	{
		$data["data_pangarengan"] = $this->M_rangking->data_pangarengan();
		$this->load->view('admin/data_penilaian/rangking/pangarengan/pangarengan',$data);
	}
	public function pangarengan()
	{
		$data["pangarengan"] = $this->M_rangking->pangarengan();
		$this->load->view('admin/data_penilaian/rangking/pangarengan/r_pangarengan',$data);
	}
	public function detail_pangarengan($ID_KELUARGA)
	{
		$data['v_penilaian'] = $this->M_rangking->get_by($ID_KELUARGA);
		$data['KEC_ID'] = $this->M_kecamatan->get_by($data['v_penilaian']->KEC_ID)->KEC_NAMA;
		$data['DES_ID'] = $this->M_desa->get_by($data['v_penilaian']->DES_ID)->DES_NAMA;
		$data['DUS_ID'] = $this->M_alamat->get_by($data['v_penilaian']->DUS_ID)->DUS_NAMA;
		$this->load->view('admin/data_penilaian/rangking/pangarengan/detail_pangarengan',$data);
	}
	function export_excel_rangking_pangarengan() {
		$data ["pangarengan"] = $this->M_rangking->pangarengan();
		$this->load->view('admin/data_penilaian/rangking/pangarengan/export_excel_rangking_pangarengan', $data);
    }
    function export_pdf_rangking_pangarengan() {
        $this->load->helper(array('dompdf', 'file'));
        ini_set('memory_limit', '1280M');

        $data ["pangarengan"] = $this->M_rangking->pangarengan();
		$filename='DATA RANGKING KELUARGA MISKIN KEC.PANGARENGAN';
        $html = $this->load->view('admin/data_penilaian/rangking/pangarengan/export_pdf_rangking_pangarengan', $data, true);
        pdf_create($html, $filename, 'A4', 'potrait');
    }
	//-----------------------------robatal------------------------------------------//
	public function data_robatal()
	{
		$data["data_robatal"] = $this->M_rangking->data_robatal();
		$this->load->view('admin/data_penilaian/rangking/robatal/robatal',$data);
	}
	public function robatal()
	{
		$data["robatal"] = $this->M_rangking->robatal();
		$this->load->view('admin/data_penilaian/rangking/robatal/r_robatal',$data);
	}
	public function detail_robatal($ID_KELUARGA)
	{
		$data['v_penilaian'] = $this->M_rangking->get_by($ID_KELUARGA);
		$data['KEC_ID'] = $this->M_kecamatan->get_by($data['v_penilaian']->KEC_ID)->KEC_NAMA;
		$data['DES_ID'] = $this->M_desa->get_by($data['v_penilaian']->DES_ID)->DES_NAMA;
		$data['DUS_ID'] = $this->M_alamat->get_by($data['v_penilaian']->DUS_ID)->DUS_NAMA;
		$this->load->view('admin/data_penilaian/rangking/robatal/detail_robatal',$data);
	}
	function export_excel_rangking_robatal() {
		$data ["robatal"] = $this->M_rangking->robatal();
		$this->load->view('admin/data_penilaian/rangking/robatal/export_excel_rangking_robatal', $data);
    }
    function export_pdf_rangking_robatal() {
        $this->load->helper(array('dompdf', 'file'));
        ini_set('memory_limit', '1280M');

        $data ["robatal"] = $this->M_rangking->robatal();
		$filename='DATA RANGKING KELUARGA MISKIN KEC.ROBATAL';
        $html = $this->load->view('admin/data_penilaian/rangking/robatal/export_pdf_rangking_robatal', $data, true);
        pdf_create($html, $filename, 'A4', 'potrait');
    }
	//-----------------------------sampang-------------------------------------------//
	public function data_sampang()
	{
		$data["data_sampang"] = $this->M_rangking->data_sampang();
		$this->load->view('admin/data_penilaian/rangking/sampang/sampang',$data);
	}
	public function sampang()
	{
		$data["sampang"] = $this->M_rangking->sampang();
		$this->load->view('admin/data_penilaian/rangking/sampang/r_sampang',$data);
	}
	public function detail_sampang($ID_KELUARGA)
	{
		$data['v_penilaian'] = $this->M_rangking->get_by($ID_KELUARGA);
		$data['KEC_ID'] = $this->M_kecamatan->get_by($data['v_penilaian']->KEC_ID)->KEC_NAMA;
		$data['DES_ID'] = $this->M_desa->get_by($data['v_penilaian']->DES_ID)->DES_NAMA;
		$data['DUS_ID'] = $this->M_alamat->get_by($data['v_penilaian']->DUS_ID)->DUS_NAMA;
		$this->load->view('admin/data_penilaian/rangking/sampang/detail_sampang',$data);
	}
	function export_excel_rangking_sampang() {
		$data ["sampang"] = $this->M_rangking->sampang();
		$this->load->view('admin/data_penilaian/rangking/sampang/export_excel_rangking_sampang', $data);
    }
    function export_pdf_rangking_sampang() {
        $this->load->helper(array('dompdf', 'file'));
        ini_set('memory_limit', '1280M');

        $data ["sampang"] = $this->M_rangking->sampang();
		$filename='DATA RANGKING KELUARGA MISKIN KEC.SAMPANG';
        $html = $this->load->view('admin/data_penilaian/rangking/sampang/export_pdf_rangking_sampang', $data, true);
        pdf_create($html, $filename, 'A4', 'potrait');
    }
	//----------------------------sokobenah-----------------------------------------//
	public function data_sokobenah()
	{
		$data["data_sokobenah"] = $this->M_rangking->data_sokobenah();
		$this->load->view('admin/data_penilaian/rangking/sokobenah/sokobenah',$data);
	}
	public function sokobenah()
	{
		$data["sokobenah"] = $this->M_rangking->sokobenah();
		$this->load->view('admin/data_penilaian/rangking/sokobenah/r_sokobenah',$data);
	}
	public function detail_sokobenah($ID_KELUARGA)
	{
		$data['v_penilaian'] = $this->M_rangking->get_by($ID_KELUARGA);
		$data['KEC_ID'] = $this->M_kecamatan->get_by($data['v_penilaian']->KEC_ID)->KEC_NAMA;
		$data['DES_ID'] = $this->M_desa->get_by($data['v_penilaian']->DES_ID)->DES_NAMA;
		$data['DUS_ID'] = $this->M_alamat->get_by($data['v_penilaian']->DUS_ID)->DUS_NAMA;
		$this->load->view('admin/data_penilaian/rangking/sokobenah/detail_sokobenah',$data);
	}
	function export_excel_rangking_sokobenah() {
		$data ["sokobenah"] = $this->M_rangking->sokobenah();
		$this->load->view('admin/data_penilaian/rangking/sokobenah/export_excel_rangking_sokobenah', $data);
    }
    function export_pdf_rangking_sokobenah() {
        $this->load->helper(array('dompdf', 'file'));
        ini_set('memory_limit', '1280M');

        $data ["sokobenah"] = $this->M_rangking->sokobenah();
		$filename='DATA RANGKING KELUARGA MISKIN KEC.SOKOBENAH';
        $html = $this->load->view('admin/data_penilaian/rangking/sokobenah/export_pdf_rangking_sokobenah', $data, true);
        pdf_create($html, $filename, 'A4', 'potrait');
    }
	//----------------------------sreseh---------------------------------------------//
	public function data_sreseh()
	{
		$data["data_sreseh"] = $this->M_rangking->data_sreseh();
		$this->load->view('admin/data_penilaian/rangking/sreseh/sreseh',$data);
	}
	public function sreseh()
	{
		$data["sreseh"] = $this->M_rangking->sreseh();
		$this->load->view('admin/data_penilaian/rangking/sreseh/r_sreseh',$data);
	}
	public function detail_sreseh($ID_KELUARGA)
	{
		$data['v_penilaian'] = $this->M_rangking->get_by($ID_KELUARGA);
		$data['KEC_ID'] = $this->M_kecamatan->get_by($data['v_penilaian']->KEC_ID)->KEC_NAMA;
		$data['DES_ID'] = $this->M_desa->get_by($data['v_penilaian']->DES_ID)->DES_NAMA;
		$data['DUS_ID'] = $this->M_alamat->get_by($data['v_penilaian']->DUS_ID)->DUS_NAMA;
		$this->load->view('admin/data_penilaian/rangking/sreseh/detail_sreseh',$data);
	}
	function export_excel_rangking_sreseh() {
		$data ["sreseh"] = $this->M_rangking->sreseh();
		$this->load->view('admin/data_penilaian/rangking/sreseh/export_excel_rangking_sreseh', $data);
    }
    function export_pdf_rangking_sreseh() {
        $this->load->helper(array('dompdf', 'file'));
        ini_set('memory_limit', '1280M');

        $data ["sreseh"] = $this->M_rangking->sreseh();
		$filename='DATA RANGKING KELUARGA MISKIN KEC.SRESEH';
        $html = $this->load->view('admin/data_penilaian/rangking/sreseh/export_pdf_rangking_sreseh', $data, true);
        pdf_create($html, $filename, 'A4', 'potrait');
    }
	//----------------------------tambelangan-------------------------------------------//
	public function data_tambelangan()
	{
		$data["data_tambelangan"] = $this->M_rangking->data_tambelangan();
		$this->load->view('admin/data_penilaian/rangking/tambelangan/tambelangan',$data);
	}
	public function tambelangan()
	{
		$data["tambelangan"] = $this->M_rangking->tambelangan();
		$this->load->view('admin/data_penilaian/rangking/tambelangan/r_tambelangan',$data);
	}
	public function detail_tambelangan($ID_KELUARGA)
	{
		$data['v_penilaian'] = $this->M_rangking->get_by($ID_KELUARGA);
		$data['KEC_ID'] = $this->M_kecamatan->get_by($data['v_penilaian']->KEC_ID)->KEC_NAMA;
		$data['DES_ID'] = $this->M_desa->get_by($data['v_penilaian']->DES_ID)->DES_NAMA;
		$data['DUS_ID'] = $this->M_alamat->get_by($data['v_penilaian']->DUS_ID)->DUS_NAMA;
		$this->load->view('admin/data_penilaian/rangking/tambelangan/detail_tambelangan',$data);
	}
	function export_excel_rangking_tambelangan() {
		$data ["tambelangan"] = $this->M_rangking->tambelangan();
		$this->load->view('admin/data_penilaian/rangking/tambelangan/export_excel_rangking_tambelangan', $data);
    }
    function export_pdf_rangking_tambelangan() {
        $this->load->helper(array('dompdf', 'file'));
        ini_set('memory_limit', '1280M');

        $data ["tambelangan"] = $this->M_rangking->tambelangan();
		$filename='DATA RANGKING KELUARGA MISKIN KEC.TAMBELANGAN';
        $html = $this->load->view('admin/data_penilaian/rangking/tambelangan/export_pdf_rangking_tambelangan', $data, true);
        pdf_create($html, $filename, 'A4', 'potrait');
    }
	//------------------------------torjun-----------------------------------------------//
	public function data_torjun()
	{
		$data["data_torjun"] = $this->M_rangking->data_torjun();
		$this->load->view('admin/data_penilaian/rangking/torjun/torjun',$data);
	}
	public function torjun()
	{
		$data["torjun"] = $this->M_rangking->torjun();
		$this->load->view('admin/data_penilaian/rangking/torjun/r_torjun',$data);
	}
	public function detail_torjun($ID_KELUARGA)
	{
		$data['v_penilaian'] = $this->M_rangking->get_by($ID_KELUARGA);
		$data['KEC_ID'] = $this->M_kecamatan->get_by($data['v_penilaian']->KEC_ID)->KEC_NAMA;
		$data['DES_ID'] = $this->M_desa->get_by($data['v_penilaian']->DES_ID)->DES_NAMA;
		$data['DUS_ID'] = $this->M_alamat->get_by($data['v_penilaian']->DUS_ID)->DUS_NAMA;
		$this->load->view('admin/data_penilaian/rangking/torjun/detail_torjun',$data);
	}
	function export_excel_rangking_torjun() {
		$data ["torjun"] = $this->M_rangking->torjun();
		$this->load->view('admin/data_penilaian/rangking/torjun/export_excel_rangking_torjun', $data);
    }
    function export_pdf_rangking_torjun() {
        $this->load->helper(array('dompdf', 'file'));
        ini_set('memory_limit', '1280M');

        $data ["torjun"] = $this->M_rangking->torjun();
		$filename='DATA RANGKING KELUARGA MISKIN KEC.TORJUN';
        $html = $this->load->view('admin/data_penilaian/rangking/torjun/export_pdf_rangking_torjun', $data, true);
        pdf_create($html, $filename, 'A4', 'potrait');
    }
	/////////////////////////////all rangking---------------------------------------------
	public function all() {
		$data ["daftar_rangking"] = $this->M_rangking->get_data();

		$this->load->view('admin/data_penilaian/rangking/r_all', $data);
	}
	public function detail_data_keluarga($ID_KELUARGA)
	{
		$data['v_penilaian'] = $this->M_rangking->get_by($ID_KELUARGA);
		$data['KEC_ID'] = $this->M_kecamatan->get_by($data['v_penilaian']->KEC_ID)->KEC_NAMA;
		$data['DES_ID'] = $this->M_desa->get_by($data['v_penilaian']->DES_ID)->DES_NAMA;
		$data['DUS_ID'] = $this->M_alamat->get_by($data['v_penilaian']->DUS_ID)->DUS_NAMA;
		$this->load->view('admin/data_penilaian/rangking/v_form_detail_rangking', $data);
	}
	function export_excel_rangking_all() {
		$data ["all"] = $this->M_rangking->get_data();
		$this->load->view('admin/data_penilaian/rangking/export_excel_rangking_all', $data);
    }
    function export_pdf_rangking_all() {
        $this->load->helper(array('dompdf', 'file'));
        ini_set('memory_limit', '1280M');

        $data ["all"] = $this->M_rangking->get_data();
		$filename='DATA RANGKING KELUARGA MISKIN KABUPATEN SAMPANG';
        $html = $this->load->view('admin/data_penilaian/rangking/export_pdf_rangking_all', $data, true);
        pdf_create($html, $filename, 'A4', 'potrait');
    }
}
