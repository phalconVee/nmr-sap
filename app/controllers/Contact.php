<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {

    public function index()
    {
        $notice = $this->session->userdata('notice');
        $this->session->set_userdata('notice', '');

        if(!empty($notice)) {
            $data['notice'] = $notice;
        }

        $data['meta_title']    = "NMR | Contact";
        $data['navigation']    = "contact";
        $data['header']        = 'layouts/contact_header';
        $data['page_content']  = 'pages/contact';
        $data['footer']        = 'layouts/footer';

        if($_POST){

            $data['name']    = $this->input->post('name');
            $data['email']   = $this->input->post('email');
            $data['subject'] = $this->input->post('subject');
            $data['message'] = $this->input->post('message');

            $email_subject = $this->input->post('subject');
            $email_content = $this->input->post('message');

            $this->contact_email($data['email'], $email_subject, $email_content);
            $this->session->set_userdata('notice', 'Your mail has been sent successfully, we will get in touch shortly');
             redirect(base_url().'contact', 'refresh');
        }

        $this->load->view('template', $data);
    }
}
