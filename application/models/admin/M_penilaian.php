<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penilaian extends CI_Model {

	public function get_data() 
	{
		return $this->db->get('penilaian')->result();
	}
	public function get_data_banyuates()
	{
		$sql = "SELECT ID_PENILAIAN,ID_KELUARGA,ID_KRITERIA,ID_SUBKRITERIA,KEPALA_KELUARGA,JUMLAH,KECAMATAN
				FROM penilaian
				 WHERE KECAMATAN='KEC-0001'";
		return $this->db->query($sql)->result();
	}
	public function input_data($data)
	{
		$this->db->insert('penilaian', $data);
	}
	public function m_kriteria()
	{
		$sql = "SELECT ID_KRITERIA, NAMA_KRITERIA FROM kriteria ORDER BY NAMA_KRITERIA DESC";
		return $this->db->query($sql)->result();
	}

	public function pilih_kriteria($id_kriteria = null)
	{
		$sql = "SELECT ID_KRITERIA, BOBOT_KRITERIA FROM kriteria";
		return $this->db->query($sql)->result();
	}
	public function pilih_subkriteria($id_subkriteria )
	{
		$this->db->where('ID_KRITERIA', $id_subkriteria);
		return $this->db->get('subkriteria')->result();
	}
	public function ambil_nama_kepalakeluarga($id_keluarga){
		$sql = "SELECT NAMA_KEPALAKELUARGA,KEC_ID,DES_ID,DUS_ID FROM keluarga where ID_KELUARGA = '$id_keluarga'";
		return $this->db->query($sql)->row();
	}
	public function ambil_bobot_kriteria($id_kriteria)
	{
		$sql = "SELECT BOBOT_KRITERIA FROM kriteria where ID_KRITERIA= '$id_kriteria'";
		return $this->db->query($sql)->row();
	}
	public function ambil_bobot_subkriteria($id_subkriteria)
	{
		$sql = "SELECT BOBOT_SUBKRITERIA FROM subkriteria where ID_SUBKRITERIA= '$id_subkriteria'";
		return $this->db->query($sql)->row();
	}
	public function get_by($where)
	{
		$this->db->where('ID_PENILAIAN', $where);
		return $this->db->get('penilaian')->row();
	}

	public function update_data($where, $data)
	{
		$this->db->where($where);
		$this->db->update('penilaian', $data);
	}

	public function delete_data($where)
	{
		$this->db->where('ID_PENILAIAN', $where);
		$this->db->delete('penilaian');
	}
	public function get($where)
	{
		$this->db->where('ID_KELUARGA', $where);
		return $this->db->get('penilaian')->result();
	}
	
}