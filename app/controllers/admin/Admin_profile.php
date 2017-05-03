<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_profile extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model(array('model_admin'));
    }

    public function index()
    {
        if(empty($_SESSION['w3_admin_id'])) {
            redirect('admin/', 'refresh');
        }

        $data['meta_title']      = "Administrator | Profile";
        $data['navigation']      = "profile";
        $data['header']          = 'admin/header';
        $data['sidebar']         = 'admin/sidebar';
        $data['page_content']    = 'admin/v_profile';
        

        $this->load->view('admin_template', $data);
    }

}