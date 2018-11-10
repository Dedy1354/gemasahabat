<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class C_home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		if ($this->session->userdata("LEVEL")!='User') {
			redirect("C_login");
		}

	}
	public function index()
	{

		$this->load->view('pengawas/v_home');
	}

}

