<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');

	}
	
	public function index()
	{
	    $this->load->view('login');
	}
	public function cek_login() {

	$data = array('USER_NAME' => $this->input->post('username', TRUE),
				  'PASSWORD' => $this->input->post('password', TRUE),
	);
	$hasil = $this->M_login->cek_user($data);

	if ($hasil->num_rows() > 0) {
		
		foreach ($hasil->result() as $sess) {
			$sess_data['USER_NAME'] = $sess->USER_NAME;
			$sess_data['PASSWORD'] = $sess->PASSWORD;
			$sess_data['LEVEL'] = $sess->LEVEL;
		}
		$this->session->set_userdata($sess_data);
		
		if ($this->session->userdata('LEVEL')=='Admin') {
			redirect('admin/C_home', 'refresh');
		}
		else if ($this->session->userdata('LEVEL')=='User') {
			redirect('pengawas/C_home','refresh');
		}

		print_r($this->session->userdata('LEVEL'));	
	}
	else {
		$this->session->set_flashdata('gagal_login','
		 	<p class="text-danger text-center" >
		 		Password Atau User name Salah,
		 	</p>
		 	');
		redirect('C_login');
	}
}

function logout (){
	$this->session->unset_userdata('LEVEL');
	session_destroy();
	redirect('C_login');
}
}