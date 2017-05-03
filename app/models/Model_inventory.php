<?php
class Model_Inventory extends CI_Model
{
    public function all_inventory_items()
    {
        $this->db->select('*');
        $this->db->from('inventory');
        $this->db->order_by('inv_id', 'desc');
        $show = $this->db->get();

        if($show->num_rows() > 0 ) {
            return $show->result();
        } else {
            return array();
        }
    }
    
    public function update($where, $data)
    {
        $this->db->update('inventory', $data, $where);
        return $this->db->affected_rows();
    }

    public function create($data_products)
    {
        $this->db->insert('inventory', $data_products);
    }

    public function edit($pro_id,$data_products)
    {
        $this->db->where('inv_id',$pro_id)
            ->update('inventory',$data_products);
    }

    public function delete($pro_id)
    {
        $this->db->where('inv_id',$pro_id)
            ->delete('inventory');
    }

    public function get_by_id($id)
    {
        $this->db->from('inventory');
        $this->db->where('inv_id',$id);
        $query = $this->db->get();

        return $query->row();
    }

    public function get_prod_by_id($id)
    {
        $this->db->from('inventory');
        $this->db->where('inv_id', $id);
        $query = $this->db->get();

        if($query->num_rows() > 0 ) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function delete_by_id($id)
    {
        $this->db->where('quote_id', $id);
        $this->db->from('quotations');
        $query = $this->db->get();
        
        if($query->num_rows() > 0)
        {
            return false;
        }else{
            $this->db->where('inv_id', $id);
            $this->db->delete('inventory');
            return true;
        }
    }

    function update_pro_picture($img_data, $id)
    {
        $profile = $img_data['file_name'];
        $data = array(
                    'image' => $profile
                );
        $this->db->where('inv_id', $id);
        $this->db->update('inventory', $data); 
        $resp[0] = 'success';
        $resp[1] = $profile;
        $id = $resp[1];
        return $resp[0].'-'.$resp[1];
    }

    function getRows($params = array()){
        $this->db->select('*');
        $this->db->from('inventory');
        $this->db->order_by('item_name','asc');

        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }

        $query = $this->db->get();

        return ($query->num_rows() > 0)?$query->result():FALSE;
    }

    public function pro_details($id)
    {
        $this->db->select('*');
        $this->db->from('inventory');
        $this->db->where('inv_id', $id);
        $show = $this->db->get();

        if($show->num_rows() > 0 ) {
            return $show->result();
        } else {
            return array();
        }
    }

    public function get_similar_items($id)
    {
        $this->db->select('*');
        $this->db->from('inventory');
        $this->db->where('inv_id', $id);
        $show = $this->db->get();

        if($show->num_rows() > 0 ) {
            $cat = $show->row_array();
            $row_id = $cat['category'];

            $qry = 'SELECT * FROM inventory WHERE category = "'.$row_id.'" ORDER BY inv_id DESC LIMIT 0, 4';
            $result = $this->db->query($qry);

            return $result->result();

        } else {
            return array();
        }
    }

    public function get_quoted_item_details($id)
    {
        $this->db->select('*');
        $this->db->from('inventory');
        $this->db->where('inv_id', $id);
        $show = $this->db->get();

        if($show->num_rows() > 0 ) {
            return $show->result();
        } else {
            return array();
        }
    }

}