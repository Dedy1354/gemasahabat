<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class M_kecamatan extends CI_Model{

	public function ambildata()
	{
		return $this->db->get('kecamatan')->result();
	}
	public function input_data($data)
	{
		$this->db->insert('kecamatan', $data);
	}
	
	public function get_by($where)
	{
		$this->db->where('KEC_ID', $where);
		return $this->db->get('kecamatan')->row();
	}

	public function update_data($where, $data)
	{
		$this->db->where($where);
		$this->db->update('kecamatan', $data);
	}

	public function delete_data($where)
	{
		$this->db->where('KEC_ID', $where);
		$this->db->delete('kecamatan');
	}
}