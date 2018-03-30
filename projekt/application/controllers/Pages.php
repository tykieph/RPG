<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{
    public function view($page = 'home')
    {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            show_404();
        }

        $data['title'] = ucfirst($page);

        $this->load->view('templates/header', $data);
        if($page == 'equipment' || $page == 'character' || $page == 'skills')
            $this->load->view('templates/character_pagination', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');
    }
    public function create()
    {
        $this->load->model('jquery_model');
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'kurwa nie sczymie';

        $this->form_validation->set_rules('value','Value','required');

        if($this->form_validation->run() === FAlSE){
            $this->load->view('templates/header', $data);
            $this->load->view('pages/jquery');
            $this->load->view('templates/footer');
        }else{
            $this->jquery_model->set_value();
            $this->load->view('templates/header', $data);
            $this->load->view('pages/home');
            $this->load->view('templates/footer');
        }
    }
}