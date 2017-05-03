<?php defined('BASEPATH') OR exit('No direct script access allowed');

class E_store extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('model_quotations');
        $this->load->model('model_inventory');
        $this->load->library('pagination');
        $this->load->library('Ajax_pagination');
        $this->perPage = 9;
    }

    public function index()
    {
        $data['meta_title']      = "NMR | Inventory";
        $data['navigation']      = "e_store";
        $data['header']          = 'layouts/store_header';
        $data['store_sidebar']    = 'layouts/store_sidebar';
        $data['page_content']    = 'pages/e_store';
        $data['footer']          = 'layouts/footer';

        //total rows count
        $totalRec = count($this->model_inventory->getRows());

        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'e_store/ajaxPaginationData';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;

        $this->ajax_pagination->initialize($config);

        //get the posts data
        $data['inventory_items'] = $this->model_inventory->getRows(array('limit'=>$this->perPage));

        $this->load->view('template', $data);
    }

    function ajaxPaginationData()
    {
        $page = $this->input->post('page');
        if(!$page){
            $offset = 0;
        }else{
            $offset = $page;
        }

        //total rows count
        $totalRec = count($this->model_inventory->getRows());

        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'e_store/ajaxPaginationData';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;

        $this->ajax_pagination->initialize($config);

        //get the posts data
        $data['inventory_items'] = $this->model_inventory->getRows(array('start'=>$offset,'limit'=>$this->perPage));

        //load the view
        $this->load->view('pages/ajax-pagination-data', $data, false);
    }

    /**
     * method to hold
     * processing of item details
     */
    public function pro_details()
    {
        global $data;

        $inv_id   = $this->input->get_post('inv_id');
        $item_name = $this->input->get_post('item_name');

        $data['web_id'] = $this->input->get_post('source');

        $data['meta_title']      = $item_name;
        $data['navigation']      = "e_store";
        $data['header']          = 'layouts/store_header';
        $data['store_sidebar']   = 'layouts/store_sidebar';
        $data['page_content']    = 'pages/e_store_details';
        $data['footer']          = 'layouts/footer';

        $data['get_details'] = $this->model_inventory->pro_details($inv_id);

        $data['similar'] = $this->model_inventory->get_similar_items($inv_id);

        $this->load->view('template', $data);
    }

    public function ajax_add_quote()
    {
        $this->_validate();

        $invoice_no = "NMR".strtoupper(uniqid());

        $data = array(
            'inv_id'   => $this->input->post('inv_id'),
            'customer_name'   => $this->input->post('customer_name'),
            'email'           => $this->input->post('email'),
            'phone'           => $this->input->post('phone'),
            'details'         => $this->input->post('details'),
            'details'         => $invoice_no,
            'order_no'        => $this->reference_no,
            'status'          => '2'
        );

        $email_subject = 'Quotation Request';
        $email_content = $data['details'];

        $this->send_email($data['admin_email'], $email_subject, $email_content);

        $insert = $this->model_quotations->save($data);
        echo json_encode(array("status" => TRUE));
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


    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if($this->input->post('customer_name') == '')
        {
            $data['inputerror'][] = 'customer_name';
            $data['error_string'][] = 'Customer name is required';
            $data['status'] = FALSE;
        }

        if($this->input->post('email') == '')
        {
            $data['inputerror'][] = 'email';
            $data['error_string'][] = 'Email address is required';
            $data['status'] = FALSE;
        }

        if($this->input->post('phone') == '')
        {
            $data['inputerror'][] = 'phone';
            $data['error_string'][] = 'Phone number is required';
            $data['status'] = FALSE;
        }

        if($this->input->post('details') == '')
        {
            $data['inputerror'][] = 'details';
            $data['error_string'][] = 'Quote details is required';
            $data['status'] = FALSE;
        }

        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }

    function send_email($to, $subject, $message)
    {
        global $data;

        $this->load->library('email');
        $this->email->set_newline("\r\n");
             
        $this->email->from($data['admin_email'], $data['site_name']);
        $this->email->reply_to($data['admin_email'], $data['site_name']);
        $this->email->to($to);
        $this->email->bcc("ugostein1000@gmail.com");
        $this->email->subject($subject);
        $this->email->message($message);    
        $this->email->send();

        return true;

    }

}
