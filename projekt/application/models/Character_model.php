<?php

class Character_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function cechy_glowne()
	{
		$query = "SELECT WW, US, K, ODP, ZR, `INT`, SW, OGD FROM `cechy_glowne` where player_id=1";
		$query = $this->db->query($query);
		
		return $query->row_array();
	}

	public function bron()
	{
		$query = "select nazwa, obc, kat, sila, zasieg, przelad, cechy from weapon";
		$query = $this->db->query($query);

		return $query->row_array();
	}

	public function pancerz()
	{
		$query = "select typ, obc, lokacja_ciala, pz from armor";
		$query = $this->db->query($query);

		return $query->row_array();
	}

}

?>