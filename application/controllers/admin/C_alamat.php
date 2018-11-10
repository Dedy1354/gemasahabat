<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class C_alamat extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_kode');
		$this->load->model('admin/M_kecamatan');
		$this->load->model('admin/M_alamat');
		$this->load->model('admin/M_desa');

		if ($this->session->userdata("LEVEL")!='Admin') {
			redirect("C_login");
		}
	}
	public function index()
	{
		$table = 'dusun';
        $id = "DUS_ID";
        $kode = "1";
        $karakter = "ALA-";

        $data['tampil_kecamatan'] = $this->M_kecamatan->ambildata();
        $data['kodeunik'] = $this->M_kode->m_kodeunik($id, $table, $kode, $karakter);

		$data ["daftar_alamat"] = $this->M_alamat->ambildata();
		$this->load->view('admin/data_master/alamat/v_alamat',$data);
	}
	
	public function pilih_desa($des_id)
	{
		$data = $this->M_alamat->pilih_desa($des_id);
		$pilih = "";
		$pilih .= "<option value=''>-Pilih Nama Desa-</option>";
		foreach ($data as $key => $value) {
			$pilih .="<option value='".$value->DES_ID."'>".$value->DES_NAMA."</option>";
		}
		echo $pilih;
	}
	
	public function proses_tambah_data_alamat()
	{
		$data_post['DUS_ID']= $this->input->post('dus_id');
		$data_post['DES_ID']= $this->input->post('des_id');
		$data_post['DUS_NAMA']= $this->input->post('dus_nama');
		$this->M_alamat->input_data($data_post);
		redirect('admin/C_alamat');
	}

	public function edit_data_alamat($DUS_ID)
	{
		$where["DUS_ID"] = $DUS_ID;
		$data['tampil_kecamatan'] = $this->M_kecamatan->ambildata();
		$data['dusun'] = $this->M_alamat->get_by($DUS_ID);
		$data['DES_ID'] = $this->M_desa->get_by($data['dusun']->DES_ID)->DES_NAMA;
		
		$this->load->view('admin/data_master/alamat/v_form_edit_alamat', $data);
	}

	public function proses_edit_data_alamat()
	{
		
		$where['DUS_ID'] = $this->input->post('dus_id');
		$data_post["DES_ID"]= $this->input->post("des_id");
		$data_post["DUS_NAMA"]= $this->input->post("dus_nama");
		$this->M_alamat->update_data($where,$data_post);	
		redirect('admin/C_alamat/');
	}

	public function hapus_data_alamat($DUS_ID)
	{
		$this->M_alamat->delete_data($DUS_ID);
		redirect('admin/C_alamat');
	}
	public function detail_data_alamat($DUS_ID)
	{
		$data['dusun'] = $this->M_alamat->get_by($DUS_ID);
		$data['DES_ID'] = $this->M_desa->get_by($data['dusun']->DES_ID)->DES_NAMA;

		$this->load->view('admin/data_master/alamat/v_form_detail_alamat', $data);
	}
}

