<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ContactsModel extends CI_Model
{
 
   public function get_contacts($customer_id = '', $where = ['active' => 1])
    {
        $this->db->where($where);
        if ($customer_id != '') {
            $this->db->where('userid', $customer_id);
        }

        $this->db->order_by('is_primary', 'DESC');

        return $this->db->get(db_prefix() . 'contacts')->result_array();
    }
}
?>