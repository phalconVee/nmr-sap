<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_quotations extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model(array('model_admin', 'model_quotations'));
    }

    public function index()
    {
        global $data;

        if(!empty($_SESSION['w3_admin_id'])) {

            $notice = $this->session->userdata('notice');
            $this->session->set_userdata('notice', '');

            if(!empty($notice)) {
                $data['notice'] = $notice;
            }

            $data['meta_title']   = "Administrator | Quotations";
            $data['navigation']   = "quotations";
            $data['header']       = 'admin/header';
            $data['sidebar']      = 'admin/sidebar';
            $data['page_content'] = 'admin/v_quotations';

            //$data['products'] = $this->model_quotations->all_quotations();

            $this->load->view('admin_template', $data);

        }else {
            redirect('admin/', 'refresh');
        }
    }

    public function quote_list()
    {
        $list = $this->model_quotations->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $ord) {
            $no++;
            $row   = array();        
            $row[] = $no;
            $row[] = $ord->customer_name;
            $row[] = $ord->email;
            $row[] = $ord->invoice_no;
            $row[] = $ord->order_no;
            
            if($ord->status == 1){
            $row[] = 'Awaiting Payment';
            }elseif($ord->status == 2){
                $row[] = 'New';
            }elseif($ord->status == 3){
                 $row[] = 'Processing';
            }elseif($ord->status == 4){
                 $row[] = 'Complete';
            }else{
                 $row[] = 'Cancelled';
            }

            $row[] = date("F j, Y", strtotime($ord->quote_date));
                        
            //add html for action
            $row[] = '<div class="btn-group">
                        <a class="btn btn-info" href="'.base_url('admin/admin_quotations/quote_details?quote_id='.$ord->quote_id.'&order_no='.$ord->order_no).'" title="View Quote Detail"><i class="fa fa-search"></i></a>

                      <a class="btn btn-warning" href="'.base_url('admin/admin_quotations/update?quote_id='.$ord->quote_id.'&order_no='.$ord->order_no).'" title="Update Quote"><i class="fa fa-pencil-square-o"></i> </a>
                     </div>';         

            $data[] = $row;
        }

        $output = array(
            "draw"            => $_POST['draw'],
            "recordsTotal"    => $this->model_quotations->count_all(),
            "recordsFiltered" => $this->model_quotations->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }


}