<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class C_kriteria extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_kode');
		$this->load->model('admin/M_kriteria');

		if ($this->session->userdata("LEVEL")!='Admin') {
			redirect("C_login");
		}

	}
	public function index()
	{	
		$table = 'kriteria';
        $id = "ID_KRITERIA";
        $kode = "1";
        $karakter = "KRI-";

        $data['kodeunik'] = $this->M_kode->m_kodeunik($id, $table, $kode, $karakter);
		$data ["daftar_kriteria"] = $this->M_kriteria->ambildata();
		$this->load->view('admin/data_master/kriteria/v_kriteria',$data);
	}

	public function hitung_bobot(){
		$batas = $this->M_kriteria->get_jumlah_kriteria()->jumlah;

		for ($i=1; $i <= $batas ; $i++) {
			$hasil = 0;

			for ($j=$i; $j <=$batas; $j++) { 
				$hasil += 1/($j);
			}
			$this->M_kriteria->update_kriteria_by_rank($i,$hasil/$batas);		
		}
		redirect('admin/C_kriteria/index');
	}
	public function proses_tambah_data_kriteria()
	{
		$data_post['ID_KRITERIA']= $this->input->post('id_kriteria');
		$data_post['NAMA_KRITERIA']= $this->input->post('nama_kriteria');
		$data_post['RANK_KRITERIA']= $this->input->post('rank_kriteria');
		$data_post['BOBOT_KRITERIA']= $this->input->post('bobot_kriteria');

		$this->M_kriteria->input_data($data_post);

		redirect('admin/C_kriteria/');
	}
	public function edit_data_kriteria($ID_KRITERIA)
	{
		/* Setting where */
		$where["ID_KRITERIA"] = $ID_KRITERIA;

		$data['kriteria'] = $this->M_kriteria->get_by($ID_KRITERIA);

		$this->load->view('admin/data_master/kriteria/v_form_edit_kriteria', $data);
	}

	public function proses_edit_data_kriteria()
	{
		$data_post["NAMA_KRITERIA"]= $this->input->post("nama_kriteria");
		$data_post["RANK_KRITERIA"]= $this->input->post("rank_kriteria");
		$data_post["BOBOT_KRITERIA"]= $this->input->post("bobot_kriteria");

		$where['ID_KRITERIA'] = $this->input->post('id_kriteria');

		$this->M_kriteria->update_data($where,$data_post);	

		redirect('admin/C_kriteria/');
	}

	public function hapus_data_kriteria($ID_KRITERIA)
	{
		$this->M_kriteria->delete_data($ID_KRITERIA);
		
		$data = $this->M_kriteria->ambildata();
		$id_kriteria_baru = '';
		$i = 1;
		foreach ($data as $data) {
			$id_kriteria_baru = 'KRI-000'.$i;
			$this->M_kriteria->update_kriteria_id_dan_rank($data->ID_KRITERIA,$id_kriteria_baru,$i);

			print_r($id_kriteria_baru);
			$i++;
		}

		$this->hitung_bobot();
		//redirect('admin/C_kriteria/');
	}
	public function detail_data_kriteria($ID_KRITERIA)
	{
		$data['kriteria'] = $this->M_kriteria->get_by($ID_KRITERIA);

		$this->load->view('admin/data_master/kriteria/v_form_detail_kriteria', $data);
	}
}

