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
    public function update()
    {
        #$sql = "SELECT * FROM `player` join armor on id_player = armor.player_id join weapon on id_player = weapon.player_id";
        $this->db->select('*');
        $this->db->from('player');
        $this->db->join('armor','armor.player_id = id_player');
        $this->db->join('weapon','weapon.player_id = id_player');
        $this->db->join('cechy_glowne','cechy_glowne.player_id = id_player');
        $query = $this->db->get();
        $result = $query->row_array();

        $id = $result['player_id'];
        $data = $_POST['pair'];
        var_dump($_POST);
        $this->db->set($data[0],$data[1]+5);
        $this->db->where('player_id',$id);
        return $this->db->update('cechy_glowne');

    }
}

?>