<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {

    public function __construct ()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model(array('model_admin'));
    }

    public function index()
    {
        global $data;

        if(!empty($_SESSION['w3_admin_id'])) {
            redirect('admin/dashboard', 'refresh');
        }

        $data['meta_title'] = 'Administrator';

        $notice = $this->session->userdata('notice');
        $this->session->set_userdata('notice', '');

        if(!empty($notice)) {
            $data['notice'] = $notice;
        }

        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('admin/login', $data);
        }
        else {

            $status = $this->model_admin->validate($this->input->post());

            if($status == 1) {

                redirect('admin/dashboard', 'refresh');
                
            }elseif($status == 2){

                $data['error_msg'] = $this->msg_status($status);
                $this->load->view('admin/login', $data);

            }else {
                $data['error_msg'] = $this->msg_status($status);
                $this->load->view('admin/login', $data);
            }
        }
    }

    function msg_status($status)
    {
        if($status == 0)
        {
            $msg = "Account has not been activated. Please check your email";
        } else if($status == 2) {
            $msg = "Account has been banned. Please contact administrator";
        } else {
            $msg = "Invalid Login Details";
        }
        return $msg;
    }


}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */