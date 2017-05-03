<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Inventory extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model(array('model_admin', 'model_inventory'));
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

            $data['meta_title']   = "Administrator | Inventory";
            $data['navigation']   = "inventory";
            $data['header']       = 'admin/header';
            $data['sidebar']      = 'admin/sidebar';
            $data['page_content'] = 'admin/v_inventory';

            $data['products'] = $this->model_inventory->all_inventory_items();

            $this->load->view('admin_template', $data);

        }else {
            redirect('admin/', 'refresh');
        }
    }

    public function create()
    {
        if(empty($_SESSION['w3_admin_id'])) {
            redirect('admin/', 'refresh');
        }

        $data['meta_title']   = "Administrator | Add Item";
        $data['navigation']   = "add_item";
        $data['header']       = 'admin/header';
        $data['sidebar']      = 'admin/sidebar';
        $data['page_content'] = 'admin/v_add_item';

        $this->load->library('form_validation');
        $this->form_validation->set_rules('item_name','Item Name','required');
        $this->form_validation->set_rules('sap_id', 'SAP ID', 'required|is_unique[inventory.sap_id]');
        $this->form_validation->set_rules('specification','Item Specification','required');
        $this->form_validation->set_rules('description','Item Description','required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('admin_template', $data);
        }else{

            $this->load->library('upload');
            $this->load->library('image_lib');

            $upload_conf = array(
                'upload_path'   => realpath('resources/inventory/'),
                'allowed_types' => 'png|jpg|jpeg',
                'encrypt_name'  => TRUE,
                'max_size'      => ''
            );

            $this->upload->initialize($upload_conf);

            if ( ! $this->upload->do_upload())
            {
                $data['error'] = array('error' => $this->upload->display_errors());

                $this->load->view('admin_template', $data);
            }else{

                $upload_image = $this->upload->data();

                //set the resize config
                $resize_conf = array(
                    'image_library'  => 'gd2',
                    'source_image'   => $upload_image['full_path'],
                    'quality'        => '100%',
                    'maintain_ratio' => FALSE,
                    'width'          => 400,
                    'height'         => 400
                );

                //initializing
                $this->image_lib->clear();
                $this->image_lib->initialize($resize_conf);
                $this->image_lib->resize();
                
                $data_products = array
                (
                    'category'      => $this->input->post('category'),
                    'item_name'		=> $this->input->post('item_name'),
                    'sap_id'        => $this->input->post('sap_id'),                     
                    'specification' => $this->input->post('specification'),
                    'image'			=> $upload_image['file_name'],
                    'description'	=> $this->input->post('description')
                );//end array data_products

                $this->model_inventory->create($data_products);

                $this->session->set_userdata('notice', 'Item has been added to inventory successfully.');
                redirect('admin/admin_inventory', 'refresh');
            }
        }
    }

    public function edit_product($id)
    {
         if(empty($_SESSION['w3_admin_id'])) {
            redirect('admin/', 'refresh');
        }

        $data['meta_title']   = "Administrator | Add Item";
        $data['navigation']   = "add_item";
        $data['header']       = 'admin/header';
        $data['sidebar']      = 'admin/sidebar';
        $data['page_content'] = 'admin/v_edit_item';

        $data['result'] = $this->model_inventory->get_prod_by_id($id);
        
        $this->load->view('admin_template', $data);
    }

    function change_pro_img($id)
    {
        global $data;
        if(empty($_SESSION['w3_admin_id'])) {
            redirect('admin/', 'refresh');
        }
        
        if(!empty($_FILES['uploadfile']['name'])) {

        $this->load->library('upload');
        $this->load->library('image_lib');   

        $upload_conf = array(
                'upload_path'   => realpath('resources/inventory/'),
                'allowed_types' => 'png|jpg|jpeg',
                'encrypt_name'  => TRUE,
                'max_size'      => ''
            );

        $this->upload->initialize($upload_conf);

        $field_name = "uploadfile";
        
        $img_ups = $this->upload->do_upload($field_name);
        if (!$img_ups)
        {
            $error = $this->upload->display_errors();
            echo $error;
            die();
        } else {
        
        $image_data = $this->upload->data();
       
        $resize_conf = array(
                'image_library'  => 'gd2',
                'source_image'   => $image_data['full_path'],
                'quality'        => '100%',
                'maintain_ratio' => FALSE,
                'width'          => 400,
                'height'         => 400                    
            );

        //initializing
        $this->image_lib->clear();
        $this->image_lib->initialize($resize_conf);
        $this->image_lib->resize();
       
        //successfully uploaded
        //update into user table
        $update_picture = $this->model_inventory->update_pro_picture($image_data, $id);
        echo $update_picture;

        }
      }
    }

    public function pro_edit($id)
    {
        $data = $this->model_inventory->get_by_id($id);
        echo json_encode($data);
    }

    public function ajax_update_product()
    {
        $this->_validate();

        $data = array(
            'category'      => $this->input->post('category'),
            'item_name'     => $this->input->post('item_name'),  
            'sap_id'        => $this->input->post('sap_id'),                  
            'specification' => $this->input->post('specification'),
            'description'   => $this->input->post('description')
        );

        $this->model_inventory->update(array('inv_id' => $this->input->post('inv_id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete_product($id)
    {
        $delete = $this->model_inventory->delete_by_id($id);

        if($delete){
            echo json_encode(array("status" => true));
        }else{
            echo json_encode(array("status" => false));
        }
        
    }

    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if($this->input->post('category') == '')
        {
            $data['inputerror'][] = 'category';
            $data['error_string'][] = 'Category required';
            $data['status'] = FALSE;
        }

        if($this->input->post('item_name') == '')
        {
            $data['inputerror'][] = 'item_name';
            $data['error_string'][] = 'Item Name is required';
            $data['status'] = FALSE;
        }

        $this->load->library('form_validation');
        $this->form_validation->set_rules('sap_id', 'SAP ID', 'required|is_unique[inventory.sap_id]');

        if ($this->form_validation->run() == FALSE)
        {
            $data['inputerror'][] = 'sap_id';
            $data['error_string'][] = 'SAP ID already exists';
            $data['status'] = FALSE;
        }

        if($this->input->post('sap_id') == '')
        {
            $data['inputerror'][] = 'sap_id';
            $data['error_string'][] = 'SAP ID is required';
            $data['status'] = FALSE;
        }

        if($this->input->post('specification') == '')
        {
            $data['inputerror'][] = 'specification';
            $data['error_string'][] = 'Specification is required';
            $data['status'] = FALSE;
        }

        if($this->input->post('description') == '')
        {
            $data['inputerror'][] = 'description';
            $data['error_string'][] = 'Description is required';
            $data['status'] = FALSE;
        }

        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }

}