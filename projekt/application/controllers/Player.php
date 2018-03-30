<?php

class Player extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('player_model');
		$this->load->helper('url_helper');
	}

	public function character()
	{
		$data['title'] = "Character";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/character_pagination', $data);
		$this->load->view('pages/player/character', $data);
		$this->load->view('templates/footer');
	}

	public function equipment()
	{
		$data['title'] = "Equipment";

		$data['cechy_glowne'] = $this->player_model->cechy_glowne();
		$data['bron'] = $this->player_model->bron();
		$data['pancerz'] = $this->player_model->pancerz();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/character_pagination', $data);
		$this->load->view('pages/player/equipment', $data);
		$this->load->view('templates/footer');
	}

	public function skills()
	{
		$data['title'] = "Skills";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/character_pagination', $data);
		$this->load->view('pages/player/skills', $data);
		$this->load->view('templates/footer');
	}

	public function update()
    {
        $this->player_model->update();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/character_pagination', $data);
        $this->load->view('pages/equipment', $data);
        $this->load->view('templates/footer');
    }

}

?>