<?php

class Merek_hp extends CI_Controller
{
    public function vivo()
    {
        $data['vivo'] = $this->model_merek->data_vivo()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('vivo',$data);
        $this->load->view('templates/footer');
        
    }
}