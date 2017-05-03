<?php

class Model_admin extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function validate($post_data)
    {
        extract($post_data);
        $this->db->select('*');
        $this->db->where('email', $email);
        $this->db->where('password', md5($password));

        $query = $this->db->get('admin');

        if ($query->num_rows() > 0) {
            $q = $query->row_array();
            if ($q['status'] == 1) {
                //set session
                $_SESSION['w3_logged_in']      = true;
                $_SESSION['w3_logged_status']  = true;
                $_SESSION['w3_email']          = $q['email'];
                $_SESSION['w3_telephone']      = $q['telephone'];
                $_SESSION['w3_address']        = $q['address'];
                $_SESSION['w3_admin_fname']    = $q['firstname'];
                $_SESSION['w3_admin_lname']    = $q['lastname'];
                $_SESSION['w3_level']          = $q['level'];
                $_SESSION['w3_admin_id']       = $q['admin_id'];
                $_SESSION['status']            = $q['status'];
            }
            return $q['status'];
        } else {
            return "3";
        }
    }

    function forgot_password($email)
    {
        $this->db->select('admin_id');
        $this->db->where('email', $email);
        $query = $this->db->get('admin');
        if($query->num_rows() > 0)
        {
            $q = $query->row_array();
            return $q['admin_id'];
        }
        else
        {
        return false;
        }
    }

    /*used to update new password */
    function update_password($dat, $key)
    {
        extract($dat);
        $data = array(
               'password' => md5($new_pwd),
               'forgot_pass_code' => ''
            );
        $this->db->where('admin_id', $pass_uid);
        $this->db->update('admin', $data);
        
        return true;
    }
    
    


}