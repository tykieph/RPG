<?php

class Jquery_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function set_value()
    {
        $this->load->helper('url');
        $data = array(
            'wartosc' => intval($this->input->post('value'))
        );
        return $this->db->insert('testowa',$data);
    }
}