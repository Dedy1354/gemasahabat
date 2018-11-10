 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_subkriteria extends CI_Model {

	public function get_data() 
	{
		return $this->db->get('subkriteria')->result();
	}

	public function input_data($data)
	{
		$this->db->insert('subkriteria', $data);
	}
	public function pilih_kriteria($id_kriteria = null)
	{
		$sql = "SELECT ID_KRITERIA, NAMA_KRITERIA FROM kriteria";
		return $this->db->query($sql)->result();
	}
	
	public function get_by($where)
	{
		$this->db->where('ID_SUBKRITERIA', $where);
		return $this->db->get('subkriteria')->row();
	}

	public function update_data($where, $data)
	{
		$this->db->where($where);
		$this->db->update('subkriteria', $data);
	}

	public function delete_data($where)
	{
		$this->db->where('ID_SUBKRITERIA', $where);
		$this->db->delete('subkriteria');
	}
	public function update_subkriteria_by_rank($ID_KRITERIA , $rank ,$bobot){
		$data = array(
        	'BOBOT_SUBKRITERIA' => $bobot
		);
		$this->db->where('ID_KRITERIA',$ID_KRITERIA);
		$this->db->where('RANK_SUBKRITERIA',$rank);
		$this->db->update('subkriteria', $data);	
	}

	public function get_jumlah_subkriteria(){
		$sql = 'SELECT ID_KRITERIA, COUnt(ID_SUBKRITERIA) as jumlah from subkriteria group by ID_KRITERIA';
		return $this->db->query($sql)->result();
	}
	
}