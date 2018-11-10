<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_penilaian extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('admin/M_kod');
		$this->load->model('pengawas/M_penilaian');
		$this->load->model('admin/M_subkriteria');
		$this->load->model('admin/M_kriteria');
		$this->load->model('admin/M_kecamatan');
		$this->load->model('admin/M_desa');
		

		if ($this->session->userdata("LEVEL")!='User') {
			redirect("C_login");
		}

	}

	public function index() {
		$table = 'penilaian';
        $id = "ID_PENILAIAN";
        $kode = "1";
        $karakter = "PEN-";

        $data['kodeunik'] = $this->M_kod->m_kodeunik($id, $table, $kode, $karakter);
		$data['tampil_kriteria'] = $this->M_penilaian->m_kriteria();
		$data['daftar_penilaian'] = $this->M_penilaian->tampil($this->session->userdata('USER_NAME'));
		$this->load->view('pengawas/data_penilaian/penilaian/v_penilaian', $data);
	}
	
	public function nama_kepalakeluarga($id_keluarga){
		$data = $this->M_penilaian->ambil_nama_kepalakeluarga($id_keluarga);
		if($id_keluarga=='0'){
			echo "0";
		}else{
			echo $data->NAMA_KEPALAKELUARGA;
		}
	}
	public function nama_kecamatan($id_keluarga){
		$data = $this->M_penilaian->ambil_nama_kepalakeluarga($id_keluarga);
		if($id_keluarga=='0'){
			echo "0";
		}else{
			echo $data->KEC_ID;
		}
	}
	public function nama_desa($id_keluarga){
		$data = $this->M_penilaian->ambil_nama_kepalakeluarga($id_keluarga);
		if($id_keluarga=='0'){
			echo "0";
		}else{
			echo $data->DES_ID;
		}
	}
	public function nama_alamat($id_keluarga){
		$data = $this->M_penilaian->ambil_nama_kepalakeluarga($id_keluarga);
		if($id_keluarga=='0'){
			echo "0";
		}else{
			echo $data->DUS_ID;
		}
	}
	public function nilai_bobot_kriteria($id_kriteria){
		$data= $this->M_penilaian->ambil_bobot_kriteria($id_kriteria);
		if($id_kriteria=='0'){
			echo "0";
		}else{
			echo $data->BOBOT_KRITERIA;
		}
	}
	public function nilai_bobot_subkriteria($id_subkriteria){
		$data= $this->M_penilaian->ambil_bobot_subkriteria($id_subkriteria);
		if($id_subkriteria=='0'){
			echo "0";
		}else{
			echo $data->BOBOT_SUBKRITERIA;
		}
	}

	public function pilih_subkriteria($id_subkriteria)
	{
		$data= $this->M_penilaian->pilih_subkriteria($id_subkriteria);
		$pilih = "";
		$pilih .= "<option value=''>- Pilih Nama subkriteria -</option>";
		foreach ($data as $key => $value) {
			$pilih .= "<option value='".$value->ID_SUBKRITERIA."'>".$value->NAMA_SUBKRITERIA."</option>";
		}
		echo $pilih;
	}
	

	public function proses_tambah_data_penilaian()
	{
		/* Tangkap Post */
		$data_post['ID_PENILAIAN']= $this->input->post('id_penilaian');
		$data_post['ID_KELUARGA']= $this->input->post('id_keluarga');
		$data_post['KEPALA_KELUARGA']= $this->input->post('kepala_keluarga');
		$data_post['KECAMATAN']= $this->input->post('kecamatan');
		$data_post['DESA']= $this->input->post('desa');
		$data_post['DUSUN']= $this->input->post('dusun');
		$data_post['ID_KRITERIA']= $this->input->post('id_kriteria');
		$data_post['ID_SUBKRITERIA']= $this->input->post('id_subkriteria');
		$data_post['BOBOT_KRI']= $this->input->post('bobot_kri');
		$data_post['BOBOT_SUB']= $this->input->post('bobot_sub');
		$data_post['JUMLAH']= $this->input->post('bobot_kri') *$this->input->post('bobot_sub');
		/* Masukkan Database */
		$this->M_penilaian->input_data($data_post);

		/* Redirect */
		redirect('pengawas/C_penilaian/index');
	}

	public function detail_data_penilaian($ID_PENILAIAN)
	{
		/* Setting where */
		$where["ID_PENILAIAN"] = $ID_PENILAIAN;
		$data['penilaian'] = $this->M_penilaian->get_by($ID_PENILAIAN);	
		//$data['KECAMATAN'] = $this->M_kecamatan->get_by($data['penilaian']->KECAMATAN)->KEC_NAMA;
		//$data['DESA'] = $this->M_desa->get_by($data['penilaian']->DESA)->DES_NAMA;
		$data['ID_SUBKRITERIA'] = $this->M_subkriteria->get_by($data['penilaian']->ID_SUBKRITERIA)->NAMA_SUBKRITERIA;
		$data['ID_KRITERIA'] = $this->M_kriteria->get_by($data['penilaian']->ID_KRITERIA)->NAMA_KRITERIA;

		$this->load->view('pengawas/data_penilaian/penilaian/v_form_detail_penilaian', $data);
	}

	public function hapus_data_penilaian($ID_PENILAIAN)
	{
		$this->M_penilaian->delete_data($ID_PENILAIAN);
		
		redirect('pengawas/C_penilaian/');
	}

	public function edit_data_penilaian($ID_PENILAIAN)
	{
		$where['ID_PENILAIAN'] = $ID_PENILAIAN;
		$data['penilaian'] = $this->M_penilaian->get_by($ID_PENILAIAN);
		$data['kriteria'] = $this->M_penilaian->m_kriteria();
		$data['ID_SUBKRITERIA'] = $this->M_subkriteria->get_by($data['penilaian']->ID_SUBKRITERIA)->NAMA_SUBKRITERIA;
		//$data['KECAMATAN'] = $this->M_kecamatan->get_by($data['tbl_penilaian']->KECAMATAN)->KEC_NAMA;
		$this->load->view('pengawas/data_penilaian/penilaian/v_form_edit_penilaian', $data);
	}

	public function proses_edit_data_penilaian()
	{
		$data_post['ID_KELUARGA']= $this->input->post('id_keluarga');
		$data_post['KEPALA_KELUARGA']= $this->input->post('kepala_keluarga');
		$data_post['KECAMATAN']= $this->input->post('kecamatan');
		$data_post['DESA']= $this->input->post('desa');
		$data_post['DUSUN']= $this->input->post('dusun');
		$data_post['ID_KRITERIA']= $this->input->post('id_kriteria');
		$data_post['ID_SUBKRITERIA']= $this->input->post('id_subkriteria');
		$data_post['BOBOT_KRI']= $this->input->post('bobot_kri');
		$data_post['BOBOT_SUB']= $this->input->post('bobot_sub');
		$data_post['JUMLAH']= $this->input->post('bobot_kri') *$this->input->post('bobot_sub');
		
		$where["ID_PENILAIAN"] = $this->input->post("id_penilaian");

		$this->M_penilaian->update_data($where,$data_post);

		redirect('pengawas/C_penilaian/');
	}
}