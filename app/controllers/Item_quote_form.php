<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Item_quote_form extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('model_quotations');
        $this->load->model('model_inventory');
        $this->load->library('pagination');
    }

    public function index()
    {
        $notice = $this->session->userdata('notice');
        $this->session->set_userdata('notice', '');

        if(!empty($notice)) {
            $data['notice'] = $notice;
        }

        $name = $this->input->get_post('name');
        $id   = $this->input->get_post('inventory_number');

        $data['name'] = $name;
        $data['id']   = $id;

        $data['meta_title']      = $name. " Quotation Form";
        $data['navigation']      = "item_quote_form";
        $data['header']          = 'layouts/quote_header';
        $data['page_content']    = 'pages/item_quote_form';
        $data['footer']          = 'layouts/footer';

        $data['get_quoted_item_details'] = $this->model_inventory->get_quoted_item_details($id);

        $this->load->library('form_validation');
        $this->form_validation->set_rules('customer_name','Customer Name','required');
        $this->form_validation->set_rules('email','Email Address','required');
        $this->form_validation->set_rules('phone','Phone Number','required');
        $this->form_validation->set_rules('company_name','Company Name','required');
        $this->form_validation->set_rules('city','City','required');
        $this->form_validation->set_rules('province','Province','required');
        $this->form_validation->set_rules('address','Address','required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('template', $data);
        }else{

            $invoice_no = "NMR".strtoupper(uniqid());

            $vessel = array
            (
                'inv_id'        => $this->input->post('inv_id'),
                'customer_name' => $this->input->post('customer_name'),
                'email'         => $this->input->post('email'),
                'company_name'  => $this->input->post('company_name'),
                'phone'         => $this->input->post('phone'),
                'city'			=> $this->input->post('city'),
                'province'	    => $this->input->post('province'),
                'address'	    => $this->input->post('address'),
                'delivery_date'	=> $this->input->post('delivery_date'),
                'quote_details'	=> $this->input->post('quote_details'),
                'invoice_no'    => $invoice_no,
                'order_no'      => $this->reference_no(),
                'status'        => '2'
            );

            $email_subject = 'Quotation Request';
            $email_content = $data['details'];

            $this->send_email($data['admin_email'], $email_subject, $email_content);

            $this->model_quotations->save($vessel);

            $this->session->set_userdata('notice', 'Your quotation request for this item '.$name.' is successful. We will get back to you shortly via mail.');
            redirect('item_quote_form/quote_successful', 'refresh');
        }
    }

    public function quote_successful()
    {
        $notice = $this->session->userdata('notice');
        $this->session->set_userdata('notice', '');

        if(!empty($notice)) {
            $data['notice'] = $notice;
        }

        $data['meta_title']      = "Quotation Successfully Delivered";
        $data['navigation']      = "item_quote_form";
        $data['header']          = 'layouts/quote_success_header';
        $data['page_content']    = 'pages/item_quote_success';
        $data['footer']          = 'layouts/footer';

        $this->load->view('template', $data);
    }

    function reference_no()
    {
        $alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 10; $i++)
        {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }

        return implode($pass);
    }

}
