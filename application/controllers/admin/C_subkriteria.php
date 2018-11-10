<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_subkriteria extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('admin/M_kode');
		$this->load->model('admin/M_subkriteria');
		$this->load->model('admin/M_kriteria');

		if ($this->session->userdata("LEVEL")!='Admin') {
			redirect("C_login");
		}

	}

	public function index() {
		$table = 'subkriteria';
        $id = "ID_SUBKRITERIA";
        $kode = "1";
        $karakter = "SUB-";

        $data['kodeunik'] = $this->M_kode->m_kodeunik($id, $table, $kode, $karakter);
		$data['tampil_kriteria'] = $this->M_kriteria->ambildata();
		$data ["daftar_subkriteria"] = $this->M_subkriteria->get_data();
		$this->load->view('admin/data_master/subkriteria/v_subkriteria', $data);
	}
	
	public function hitung_bobot(){
		$batas = $this->M_subkriteria->get_jumlah_subkriteria();
		foreach ($batas as $batas) {
			for ($i=1; $i <= $batas->jumlah ; $i++) {
				$hasil = 0;
				for ($j=$i; $j <=$batas->jumlah; $j++) { 
					$hasil += 1/($j);
				}
				$this->M_subkriteria->update_subkriteria_by_rank($batas->ID_KRITERIA,$i,$hasil/$batas->jumlah);			
			}
		}
		redirect('admin/C_subkriteria/index');
	}

	public function pilih_kriteria($id_kriteria)
	{
		$data= $this->M_subkriteria->pilih_kriteria($id_kriteria);
		$pilih = "";
		$pilih .= "<option value=''>- Pilih Nama kriteria -</option>";
		foreach ($data as $key => $value) {
			$pilih .= "<option value='".$value->ID_KRITERIA."'>".$value->NAMA_KRITERIA."</option>";
		}
		echo $pilih;
	}

	public function proses_tambah_data_subkriteria()
	{
		/* Tangkap Post */
		$data_post['ID_SUBKRITERIA']= $this->input->post('id_subkriteria');
		$data_post['ID_KRITERIA']= $this->input->post('id_kriteria');
		$data_post['NAMA_SUBKRITERIA']= $this->input->post('nama_subkriteria');
		$data_post['RANK_SUBKRITERIA']= $this->input->post('rank_subkriteria');
		$data_post['BOBOT_SUBKRITERIA']= $this->input->post('bobot_subkriteria');

		/* Masukkan Database */
		$this->M_subkriteria->input_data($data_post);

		/* Redirect */
		redirect('admin/C_subkriteria/index');
	}

	public function edit_data_subkriteria($ID_SUBKRITERIA)
	{
		/* Setting where */
		$where["ID_SUBKRITERIA"] = $ID_SUBKRITERIA;

		$data['subkriteria'] = $this->M_subkriteria->get_by($ID_SUBKRITERIA);
		$data['kriteria'] = $this->M_kriteria->ambildata();
		$this->load->view('admin/data_master/subkriteria/v_form_edit_subkriteria', $data);
	}

	public function proses_edit_data_subkriteria()
	{	
		$data_post["ID_SUBKRITERIA"]= $this->input->post("id_subkriteria");
		$data_post["ID_KRITERIA"]= $this->input->post("id_kriteria");
		$data_post["NAMA_SUBKRITERIA"]= $this->input->post("nama_subkriteria");
		$data_post["RANK_SUBKRITERIA"]= $this->input->post("rank_subkriteria");
		$data_post["BOBOT_SUBKRITERIA"]= $this->input->post("bobot_subkriteria");

		$where['ID_SUBKRITERIA'] = $this->input->post('id_subkriteria');

		$this->M_subkriteria->update_data($where,$data_post);	

		redirect('admin/C_subkriteria/index');
	}

	public function hapus_data_subkriteria($ID_SUBKRITERIA)
	{	
		
		$this->M_subkriteria->delete_data($ID_SUBKRITERIA);
		redirect('admin/C_subkriteria/index');
	}
	public function detail_data_subkriteria($ID_SUBKRITERIA)
	{	
		$where["ID_SUBKRITERIA"] = $ID_SUBKRITERIA;
		$data['subkriteria'] = $this->M_subkriteria->get_by($ID_SUBKRITERIA);
		$data['ID_KRITERIA'] = $this->M_kriteria->get_by($data['subkriteria']->ID_KRITERIA)->NAMA_KRITERIA;
		$this->load->view('admin/data_master/subkriteria/v_form_detail_subkriteria', $data);
	}
}