<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class C_kecamatan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_kode');
		$this->load->model('admin/M_kecamatan');

		if ($this->session->userdata("LEVEL")!='Admin') {
			redirect("C_login");
		}

	}
	public function index()
	{
		$table = 'kecamatan';
        $id = "KEC_ID";
        $kode = "1";
        $karakter = "KEC-";
        $data['kodeunik'] = $this->M_kode->m_kodeunik($id, $table, $kode, $karakter);
		$data ["daftar_kecamatan"] = $this->M_kecamatan->ambildata();
		$this->load->view('admin/data_master/kecamatan/v_kecamatan',$data);
	}
	public function proses_tambah_data_kecamatan()
	{
		$data_post['KEC_ID']= $this->input->post('kec_id');
		$data_post['KEC_NAMA']= $this->input->post('kec_nama');
		
		/* Masukkan Database */
		$this->M_kecamatan->input_data($data_post);

		/* Redirect */
		redirect('admin/C_kecamatan/');
	}

	public function edit_data_kecamatan($KEC_ID)
	{
		/* Setting where */
		$where["KEC_ID"] = $KEC_ID;
		$data['kecamatan'] = $this->M_kecamatan->get_by($KEC_ID);
		$this->load->view('admin/data_master/kecamatan/v_form_edit_kecamatan', $data);
	}

	public function proses_edit_data_kecamatan()
	{
		$data_post["KEC_ID"]= $this->input->post("kec_id");
		$data_post["KEC_NAMA"]= $this->input->post("kec_nama");

		$where['KEC_ID'] = $this->input->post('kec_id');

		$this->M_kecamatan->update_data($where,$data_post);	

		redirect('admin/C_kecamatan/');
	}

	public function hapus_data_kecamatan($KEC_ID)
	{
		$this->M_kecamatan->delete_data($KEC_ID);
		
		redirect('admin/C_kecamatan');
	}
}

