<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rangking extends CI_Model {

	public function get_data() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL FROM v_penilaian ORDER BY TOTAL ASC";
		return $this->db->query($sql)->result();
	}
	public function banyuates() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0001' 
			GROUP BY ID_KELUARGA 
			ORDER BY `TOTAL` ASC";
		return $this->db->query($sql)->result();
	}
	public function data_banyuates() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0001' 
			GROUP BY ID_KELUARGA ";
		return $this->db->query($sql)->result();
	}
	public function camplong() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0002' 
			GROUP BY ID_KELUARGA 
			ORDER BY `TOTAL` ASC";
		return $this->db->query($sql)->result();
	}
	public function data_camplong() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0002' 
			GROUP BY ID_KELUARGA ";
		return $this->db->query($sql)->result();
	}
	public function jrengik() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0003' 
			GROUP BY ID_KELUARGA 
			ORDER BY `TOTAL` ASC";
		return $this->db->query($sql)->result();
	}
	public function data_jrengik() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0003' 
			GROUP BY ID_KELUARGA ";
		return $this->db->query($sql)->result();
	}
	public function karangpenang() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0004' 
			GROUP BY ID_KELUARGA 
			ORDER BY `TOTAL` ASC";
		return $this->db->query($sql)->result();
	}
	public function data_karangpenang() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0004' 
			GROUP BY ID_KELUARGA";
		return $this->db->query($sql)->result();
	}
	public function Kedungdung() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0005' 
			GROUP BY ID_KELUARGA 
			ORDER BY `TOTAL` ASC";
		return $this->db->query($sql)->result();
	}
	public function data_Kedungdung() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0005' 
			GROUP BY ID_KELUARGA ";
		return $this->db->query($sql)->result();
	}
	public function ketapang() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0006' 
			GROUP BY ID_KELUARGA 
			ORDER BY `TOTAL` ASC";
		return $this->db->query($sql)->result();
	}
	public function data_ketapang() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0006' 
			GROUP BY ID_KELUARGA ";
		return $this->db->query($sql)->result();
	}
	public function omben() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0007' 
			GROUP BY ID_KELUARGA 
			ORDER BY `TOTAL` ASC";
		return $this->db->query($sql)->result();
	}
	public function data_omben() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0007' 
			GROUP BY ID_KELUARGA";
		return $this->db->query($sql)->result();
	}
	public function pangarengan() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0008' 
			GROUP BY ID_KELUARGA 
			ORDER BY `TOTAL` ASC";
		return $this->db->query($sql)->result();
	}
	public function data_pangarengan() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0008' 
			GROUP BY ID_KELUARGA";
		return $this->db->query($sql)->result();
	}
	public function robatal() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0009' 
			GROUP BY ID_KELUARGA 
			ORDER BY `TOTAL` ASC";
		return $this->db->query($sql)->result();
	}
	public function data_robatal() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0009' 
			GROUP BY ID_KELUARGA";
		return $this->db->query($sql)->result();
	}
	public function sampang() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0010' 
			GROUP BY ID_KELUARGA 
			ORDER BY `TOTAL` ASC";
		return $this->db->query($sql)->result();
	}
	public function data_sampang() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0010' 
			GROUP BY ID_KELUARGA";
		return $this->db->query($sql)->result();
	}
	public function sokobenah() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0011' 
			GROUP BY ID_KELUARGA 
			ORDER BY `TOTAL` ASC";
		return $this->db->query($sql)->result();
	}
	public function data_sokobenah() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0011' 
			GROUP BY ID_KELUARGA";
		return $this->db->query($sql)->result();
	}
	public function sreseh() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0012' 
			GROUP BY ID_KELUARGA 
			ORDER BY `TOTAL` ASC";
		return $this->db->query($sql)->result();
	}
	public function data_sreseh() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0012' 
			GROUP BY ID_KELUARGA ";
		return $this->db->query($sql)->result();
	}
	public function tambelangan() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0013' 
			GROUP BY ID_KELUARGA 
			ORDER BY `TOTAL` ASC";
		return $this->db->query($sql)->result();
	}
	public function data_tambelangan() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0013' 
			GROUP BY ID_KELUARGA";
		return $this->db->query($sql)->result();
	}
	public function torjun() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0014' 
			GROUP BY ID_KELUARGA 
			ORDER BY `TOTAL` ASC";
		return $this->db->query($sql)->result();
	}
	public function data_torjun() 
	{
		$sql = "SELECT ID_KELUARGA, KEPALA_KELUARGA,KEC_ID,DES_ID,DUS_ID,RECORD, TOTAL 
		 	FROM v_penilaian 
			WHERE KEC_ID = 'KEC-0014' 
			GROUP BY ID_KELUARGA";
		return $this->db->query($sql)->result();
	}
	public function get_by($where)
	{
		$this->db->where('ID_KELUARGA', $where);
		return $this->db->get('v_penilaian')->row();
	}
}