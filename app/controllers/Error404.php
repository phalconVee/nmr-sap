<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error404 extends MY_Controller {

    public function index()
    {
        global $data;
        $data['meta_title'] = "404 Error";
        $this->load->view('errors/error404', $data);
    }
}

/* End of file error404.php */
/* Location: ./application/controllers/error404.php */