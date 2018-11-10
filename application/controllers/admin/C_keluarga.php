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
		$this->load->model('admin/M_user');

		if ($this->session->userdata("LEVEL")!='Admin') {
			redirect("C_login");
		}

	}

	public function index() {
        $data['tampil_kecamatan'] = $this->M_kecamatan->ambildata();
		$data ["daftar_keluarga"] = $this->M_keluarga->ambildata();
		$this->load->view('admin/data_master/keluarga/v_keluarga', $data);
	}
	public function pilih_desa($des_id)
	{
		$data = $this->M_keluarga->pilih_desa($des_id);
		$pilih = "";
		$pilih .= "<option value=''>-Pilih Nama Desa-</option>";
		foreach ($data as $key => $value) {
			$pilih .="<option value='".$value->DES_ID."'>".$value->DES_NAMA."</option>";
		}
		echo $pilih;
	}
	public function pilih_alamat($dus_id)
	{
		$data = $this->M_keluarga->pilih_alamat($dus_id);
		$pilih = "";
		$pilih .= "<option value=''>-Pilih Nama Dusun/Alamat-</option>";
		foreach ($data as $key => $value) {
			$pilih .="<option value='".$value->DUS_ID."'>".$value->DUS_NAMA."</option>";
		}
		echo $pilih;
	}
	public function proses_tambah_data_keluarga()
	{
		/* Tangkap Post */
		$data_post['ID_KELUARGA']= (int)$this->input->post('id_keluarga');
		$data_post['KEC_ID']= $this->input->post('kec_id');
		$data_post['DES_ID']= $this->input->post('des_id');
		$data_post['DUS_ID']= $this->input->post('dus_id');
		$data_post['NAMA_KEPALAKELUARGA']= $this->input->post('nama_kepalakeluarga');
		$data_post['JUMLAH_ANGGOTAKELUARGA']=(int) $this->input->post('jumlah_anggotakeluarga');
		$data_post['JUMLAH_KELUARGA']=(int) $this->input->post('jumlah_keluarga');
		$data['USER_NAME']= $this->input->post('id_keluarga');
		$data['PASSWORD']= $this->input->post('id_keluarga');
		$data['LEVEL']= 'User';

		$this->M_keluarga->input_data($data_post);
		$this->M_user->input_data($data);

		redirect('admin/C_keluarga/index');
	}

	public function edit_data_keluarga($ID_KELUARGA)
	{	
		$where["ID_KELUARGA"] = $ID_KELUARGA;

		$data['keluarga'] = $this->M_keluarga->get_by($ID_KELUARGA);
		$data['tampil_kecamatan'] = $this->M_kecamatan->ambildata();
		$data['DES_ID'] = $this->M_desa->get_by($data['keluarga']->DES_ID)->DES_NAMA;
		$data['DUS_ID'] = $this->M_alamat->get_by($data['keluarga']->DUS_ID)->DUS_NAMA;
		
		$this->load->view('admin/data_master/keluarga/v_form_edit_keluarga', $data);
	}

	public function proses_edit_data_keluarga()
	{
		$where["ID_KELUARGA"] = $this->input->post("id_keluarga");

		$data_post['KEC_ID']= $this->input->post('kec_id');
		$data_post['DES_ID']= $this->input->post('des_id');
		$data_post['DUS_ID']= $this->input->post('dus_id');
		$data_post['NAMA_KEPALAKELUARGA']= $this->input->post('nama_kepalakeluarga');
		$data_post['JUMLAH_ANGGOTAKELUARGA']= $this->input->post('jumlah_anggotakeluarga');
		$data_post['JUMLAH_KELUARGA']= $this->input->post('jumlah_keluarga');


		$this->M_keluarga->update_data($where,$data_post);

		redirect('admin/C_keluarga/index');
	}

	public function hapus_data_keluarga($ID_KELUARGA)
	{
		$this->M_keluarga->delete_data($ID_KELUARGA);

		redirect('admin/C_keluarga/index');
	}
	public function detail_data_keluarga($ID_KELUARGA)
	{
		
		$where["ID_KELUARGA"] = $ID_KELUARGA;

		$data['keluarga'] = $this->M_keluarga->get_by($ID_KELUARGA);
		$data['KEC_ID'] = $this->M_kecamatan->get_by($data['keluarga']->KEC_ID)->KEC_NAMA;
		$data['DES_ID'] = $this->M_desa->get_by($data['keluarga']->DES_ID)->DES_NAMA;
		$data['DUS_ID'] = $this->M_alamat->get_by($data['keluarga']->DUS_ID)->DUS_NAMA;
		$this->load->view('admin/data_master/keluarga/v_form_detail_keluarga', $data);
	}
}