<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_keluarga extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('admin/M_kode');
		$this->load->model('admin/M_keluarga');
		$this->load->model('admin/M_kecamatan');
		$this->load->model('admin/M_desa');
		$this->load->model('admin/M_alamat');

		if ($this->session->userdata("LEVEL")!='User') {
			redirect("C_login");
		}

	}

	public function index() {
        $data['tampil_kecamatan'] = $this->M_kecamatan->ambildata();
		$data ["daftar_keluarga"] = $this->M_keluarga->tampil($this->session->userdata('USER_NAME'));
		$this->load->view('pengawas/data_master/keluarga/v_keluarga', $data);
	}

	public function detail_data_keluarga($ID_KELUARGA)
	{
		
		$where["ID_KELUARGA"] = $ID_KELUARGA;

		$data['keluarga'] = $this->M_keluarga->get_by($ID_KELUARGA);
		$data['KEC_ID'] = $this->M_kecamatan->get_by($data['keluarga']->KEC_ID)->KEC_NAMA;
		$data['DES_ID'] = $this->M_desa->get_by($data['keluarga']->DES_ID)->DES_NAMA;
		$data['DUS_ID'] = $this->M_alamat->get_by($data['keluarga']->DUS_ID)->DUS_NAMA;
		
		$this->load->view('pengawas/data_master/keluarga/v_form_detail_keluarga', $data);
	}
}