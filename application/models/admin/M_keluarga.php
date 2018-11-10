<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_keluarga extends CI_Model {

	public function ambildata()
	{
		return $this->db->get('keluarga')->result();
	}
	
	public function pilih_desa($des_id)
	{
		$this->db->where('KEC_ID', $des_id);
		return $this->db->get('desa')->result();
	}
	public function pilih_alamat($dus_id)
	{
		$this->db->where('DES_ID', $dus_id);
		return $this->db->get('dusun')->result();
	}
	public function input_data($data)
	{
		$this->db->insert('keluarga' , $data);
	}
	public function get_by($where)
	{
		$this->db->where('ID_KELUARGA', $where);
		return $this->db->get('keluarga')->row();
	}

	public function update_data($where, $data)
	{
		$this->db->where($where);
		$this->db->update('keluarga', $data);
	}

	public function delete_data($where)
	{
		$this->db->where('ID_KELUARGA', $where);
		$this->db->delete('keluarga');
	}
	function tampil($user_name)
	{
		$this->db->where('ID_KELUARGA',$user_name);
		return $this->db->get('keluarga')->result();
	}
}