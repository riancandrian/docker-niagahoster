<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller{
    public function index(){
        $data = array();
        $data['navbar'] = $this->load->view('component/navbar', $data, TRUE);
        $data['banner'] = $this->load->view('component/banner', $data, TRUE);
        $data['service'] = $this->load->view('component/service', $data, TRUE);
        $data['pricing'] = $this->load->view('component/pricing', $data, TRUE);
        $data['kelebihan'] = $this->load->view('component/kelebihan', $data, TRUE);
        $data['component'] = $this->load->view('component/component', $data, TRUE);
        $data['dukungan'] = $this->load->view('component/dukungan', $data, TRUE);
        $data['modul'] = $this->load->view('component/modul_linux', $data, TRUE);
        $data['share'] = $this->load->view('component/share', $data, TRUE);

        $this->render($data);
    }
}