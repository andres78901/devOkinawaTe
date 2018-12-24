<?php

/**
 * Resources Library v1.2.0
 * Librería creada por Eborio Linarez
 * Autocarga de hojas de estilos CSS y scripts JS y funciones jQuery
 * Fecha de Creacion: 06/07/2013
 */
class Resources
{

    var $css_path = 'css/';
    var $js_path = 'js/';
    var $css = array();
    var $js = array();
    var $functions = array();

    function __construct($params = array())
    {
        if (count($params) > 0) {
            $this->initialize($params);
        }
    }

    /**
     * Se inicializan todos los parametros
     * @param array $params Contiene los parametros enviados por el usuario
     */
    function initialize($params = array())
    {
        $CI = & get_instance();
        $CI->load->helper('url');
        $CI->load->helper('html');
        foreach ($params as $key => $val) {
            if (isset($this->$key)) {
                $this->$key = $val;
            }
        }
    }

    /**
     * Metodo para cargar las hojas de estilos CSS
     * @return string Etiquetas HTML con las hojas de estilos
     */
    function css()
    {
        $content = NULL;
        foreach ($this->css as $key => $val) {
            // Se verifica que $key no sea entero
            // Si no es entero es un arreglo asociativo
            // Si es entero es un arreglo unidimensional
            if (!is_int($key)) {
                $content .= link_tag($val . $key . '.css');
            } else {
                // Se verifica si el valor enviado es una URL correcta
                if (filter_var($val, FILTER_VALIDATE_URL)) {
                    $content .= link_tag($val);
                } else {
                    $content .= link_tag($this->css_path . $val . '.css');
                }
            }
        }
        return $content;
    }

    /**
     * Metodo para cargar los scripts JS
     * @return string Etiquetas HTML con las archivos JS
     */
    function js()
    {
        $content = NULL;
        foreach ($this->js as $key => $val) {
            // Se verifica que $key no sea entero
            // Si no es entero es un arreglo asociativo
            // Si es entero es un arreglo unidimensional
            if (!is_int($key)) {
                $content .= '<script src="' . base_url() . $val . $key . '.js"></script>';
            } else {
                // Se verifica si el valor enviado es una URL correcta
                if (filter_var($val, FILTER_VALIDATE_URL)) {
                    $content .= '<script src="' . $val . '"></script>';
                } else {
                    $content .= '<script src="' . base_url() . $this->js_path . $val . '.js"></script>';
                }
            }
        }
        return $content;
    }

    /**
     * Metodo para incluir metodos JS dentro de vistas
     * @return string Metodo JS
     */
    function functions()
    {
        if (!empty($this->functions)) {
            $content = '<script>$(function() {';
            foreach ($this->functions as $item) {
                $content .= $item;
            }
            $content .= '});</script>';
            return $content;
        }
    }

}
