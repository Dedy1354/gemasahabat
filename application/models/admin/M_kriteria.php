<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class M_kriteria extends CI_Model{

	public function ambildata()
	{
		$sql = "SELECT ID_KRITERIA,NAMA_KRITERIA,RANK_KRITERIA,BOBOT_KRITERIA FROM kriteria ORDER BY RANK_KRITERIA ASC";
		return $this->db->query($sql)->result();
	}

	public function input_data($data)
	{
		$this->db->insert('kriteria', $data);
	}
	
	public function get_by($where)
	{
		$this->db->where('ID_KRITERIA', $where);
		return $this->db->get('kriteria')->row();
	}

	public function update_data($where, $data)
	{
		$this->db->where($where);
		$this->db->update('kriteria', $data);
	}

	public function delete_data($where)
	{
		$this->db->where('ID_KRITERIA', $where);
		$this->db->delete('kriteria');
	}

	public function update_kriteria_by_rank($rank ,$bobot){
		$data = array(
        	'BOBOT_KRITERIA' => $bobot
		);
		$this->db->where('RANK_KRITERIA',$rank);
		$this->db->update('kriteria', $data);	
	}

	public function update_kriteria_id_dan_rank($id_kriteria, $id_kriteria_baru ,$rank){
		$data = array(
			'ID_KRITERIA' => $id_kriteria_baru,
        	'RANK_KRITERIA' => $rank
		);
		$this->db->where('ID_KRITERIA',$id_kriteria);
		$this->db->update('kriteria', $data);	
	}

	public function get_jumlah_kriteria(){
		$sql = 'SELECT COUnt(ID_KRITERIA) as jumlah from kriteria';
		return $this->db->query($sql)->row();
	}
	public function update_rank($id,$k){
		$data = array(
			'RANK_KRITERIA'=>$k
			);
		$this->db->where('ID_KRITERIA',$id);
		$this->db->update('kriteria',$data);
	}
}