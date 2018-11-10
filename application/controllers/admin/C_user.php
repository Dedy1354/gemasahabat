<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {   

	function __construct() {
		parent::__construct();
		$this->load->model('admin/M_user');

		if ($this->session->userdata("LEVEL")!='Admin') {
			redirect("C_login");
		}
	}

	public function index() { 

		$data ["daftar_user"] = $this->M_user->get_data();
		$this->load->view('admin/data_master/user/v_user', $data);
	}
	
	public function proses_tambah_data_user()
	{
		$data['USER_NAME']= $this->input->post('user_name');
		$data['PASSWORD']= $this->input->post('password');
		$data['LEVEL']= $_POST['level'];
		
		$this->M_user->input_data($data);

		redirect('admin/C_user/');
	} 

	public function edit_data_user($USER_NAME)
	{
		$data['user'] = $this->M_user->get_by($USER_NAME);

		$this->load->view('admin/data_master/user/v_form_edit_user', $data);
	}

	public function proses_edit_data_user()
	{
		$where['USER_NAME']= $this->input->post('USER_NAME');

		$data_post['PASSWORD']= $this->input->post('password');
		$data_post['LEVEL']= $this->input->post('level');

		$this->M_user->update_data($where,$data_post);

		//print_r($data_post);
		redirect('admin/C_user/');
	}

	public function hapus_data_user($USER_NAME)
	{
		$this->M_user->delete_data($USER_NAME);

		redirect('admin/C_user/');
	}
}