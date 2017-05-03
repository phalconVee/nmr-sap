<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model(array('model_admin', 'model_quotations'));
    }

    public function index()
    {
        if(empty($_SESSION['w3_admin_id'])) {
            redirect('admin/', 'refresh');
        }

        $data['meta_title']      = "Dashboard";
        $data['navigation']      = "dashboard";
        $data['header']         = 'admin/header';
        $data['sidebar']         = 'admin/sidebar';
        $data['page_content']    = 'admin/dashboard';
        

        $this->load->view('admin_template', $data);
    }

}