<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class M_desa extends CI_Model{

	public function ambildata()
	{
		return $this->db->get('desa')->result();
	}
	public function input_data($data)
	{
		$this->db->insert('desa', $data);
	}
	
	public function get_by($where)
	{
		$this->db->where('DES_ID', $where);
		return $this->db->get('desa')->row();
	}

	public function update_data($where, $data)
	{
		$this->db->where($where);
		$this->db->update('desa', $data);
	}

	public function delete_data($where)
	{
		$this->db->where('DES_ID', $where);
		$this->db->delete('desa');
	}
}