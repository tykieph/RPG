<?php

class Character extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('character_model');
		$this->load->helper('url_helper');
	}

	public function equipment()
	{
		$data['cechy_glowne'] = $this->character_model->cechy_glowne();
		$data['bron'] = $this->character_model->bron();
		$data['pancerz'] = $this->character_model->pancerz();
		$data['title'] = "Equipment";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/character_pagination', $data);
		$this->load->view('pages/equipment', $data);
		$this->load->view('templates/footer');
	}

}

?>