<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index()
    {
        global $data;

        $data['meta_title']      = "NMR | Home";
        $data['navigation']      = "homepage";
        $data['header']          = 'layouts/home_header';
        $data['page_content']    = 'pages/home';
        $data['footer']          = 'layouts/footer';

        $this->load->view('template', $data);
    }


}
