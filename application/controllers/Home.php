<?php

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->library("resources");
        $config['css'] = array('estilo');
        $config['js'] = array('alerta');
        $this->resources->initialize($config);
        $this->load->view('vista');
        echo 'llego';
    }

}
