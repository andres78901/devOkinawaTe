<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->library("resources");

        $config = array(
            'css' => array('bootstrap'),
            'js' => array('jquery-3.2.1.slim.min', 'bootstrap.min')
        );
        $this->resources->initialize($config);
        $this->load->view('home/home', $this->renderCore());
    }

    /**
     * metodo empleado para el renderizado de los controles iniciales del sitio
     * @author 
     * @return type
     */
    private function renderCore()
    {
        $views = array(
            'menu' => $this->load->view('home/menu', '', true),
            'gallery' => $this->load->view('home/galeria', '', true),
            'history' => $this->load->view('home/historias', '', true)
        );
        return $views;
    }

}
