<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class C_desa extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_kode');
		$this->load->model('admin/M_kecamatan');
		$this->load->model('admin/M_desa');

		if ($this->session->userdata("LEVEL")!='Admin') {
			redirect("C_login");
		}
	}
	public function index()
	{	
		$table = 'desa';
        $id = "DES_ID";
        $kode = "1";
        $karakter = "DES-";

        $data['tampil_kecamatan'] = $this->M_kecamatan->ambildata();
        $data['kodeunik'] = $this->M_kode->m_kodeunik($id, $table, $kode, $karakter);
		$data ["daftar_desa"] = $this->M_desa->ambildata();
		$this->load->view('admin/data_master/desa/v_desa',$data);
	}
	
	public function proses_tambah_data_desa()
	{
		$data_post['DES_ID']= $this->input->post('des_id');
		$data_post['KEC_ID']= $this->input->post('kec_id');
		$data_post['DES_NAMA']= $this->input->post('des_nama');
		$this->M_desa->input_data($data_post);

		redirect('admin/C_desa');
	}

	public function edit_data_desa($DES_ID)
	{
		/* Setting where */
		$where["DES_ID"] = $DES_ID;
		$data['tampil_kecamatan'] = $this->M_kecamatan->ambildata();
		$data['desa'] = $this->M_desa->get_by($DES_ID);

		$this->load->view('admin/data_master/desa/v_form_edit_desa', $data);
	}

	public function proses_edit_data_desa()
	{
		$data_post["KEC_ID"]= $this->input->post("kec_id");
		$data_post["DES_NAMA"]= $this->input->post("des_nama");
		$where['DES_ID'] = $this->input->post('des_id');

		$this->M_desa->update_data($where,$data_post);	

		redirect('admin/C_desa/');
	}

	public function hapus_data_desa($DES_ID)
	{
		$this->M_desa->delete_data($DES_ID);
		
		redirect('admin/C_desa');
	}
}

