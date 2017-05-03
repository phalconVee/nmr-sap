<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_quotations extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    var $table = 'quotations';
    var $order = array('quotations.quote_id' => 'desc'); // default order

    private function _get_datatables_query($term='')
    {
        $column = array('customer_name', 'email', 'invoice_no', 'order_no', 'status', 'quote_date', null);
        
        $this->db->select('quote_id, customer_name, email, invoice_no, order_no, status, quote_date');

        $this->db->from($this->table);
        $this->db->or_like('customer_name', $term);
        $this->db->or_like('email', $term);  
        $this->db->or_like('invoice_no', $term);  
        $this->db->or_like('order_no', $term);  
        $this->db->or_like('status', $term);  
        $this->db->or_like('quote_date', $term);
            
        if(isset($_REQUEST['order'])) // here order processing
        {
            $this->db->order_by($column[$_REQUEST['order']['0']['column']], $_REQUEST['order']['0']['dir']);
        }
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $term = $_REQUEST['search']['value'];   
        $this->_get_datatables_query($term);
        if($_REQUEST['length'] != -1)
            $this->db->limit($_REQUEST['length'], $_REQUEST['start']);
            $query = $this->db->get();
            return $query->result(); 
    }
    
    function count_filtered()
    {
        $term = $_REQUEST['search']['value']; 
        $this->_get_datatables_query($term);
        $query = $this->db->get();
        return $query->num_rows();  
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function save($data)
    {
        $this->db->insert('quotations', $data);
        return $this->db->insert_id();
    }

}