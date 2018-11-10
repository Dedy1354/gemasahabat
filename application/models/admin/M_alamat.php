<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class M_alamat extends CI_Model{

	public function ambildata()
	{
		return $this->db->get('dusun')->result();
	}
	public function input_data($data)
	{
		$this->db->insert('dusun', $data);
	}
	public function pilih_desa($des_id)
	{
		$this->db->where('KEC_ID', $des_id);
		return $this->db->get('desa')->result();
	}
	public function get_by($where)
	{
		$this->db->where('DUS_ID', $where);
		return $this->db->get('dusun')->row();
	}

	public function update_data($where, $data)
	{
		$this->db->where($where);
		$this->db->update('dusun', $data);
	}

	public function delete_data($where)
	{
		$this->db->where('DUS_ID', $where);
		$this->db->delete('dusun');
	}
}