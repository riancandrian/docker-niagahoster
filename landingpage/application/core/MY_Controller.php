<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    function render($data = NULL){     
        $data['style']    = $this->load->view('component/section/style', $data, TRUE);
        $data['script']   = $this->load->view('component/section/script', $data, TRUE);

        $this->load->view('index', $data);  
    }
}