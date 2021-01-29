<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ContactsModel extends CI_Model
{
 
   
    public function get($id = '', $where = [])
    {
        $this->db->select(implode(',', prefixed_table_fields_array(db_prefix() . 'clients')) . ',' . get_sql_select_client_company());

        $this->db->join(db_prefix() . 'countries', '' . db_prefix() . 'countries.country_id = ' . db_prefix() . 'clients.country', 'left');
        $this->db->join(db_prefix() . 'contacts', '' . db_prefix() . 'contacts.userid = ' . db_prefix() . 'clients.userid AND is_primary = 1', 'left');

        if ((is_array($where) && count($where) > 0) || (is_string($where) && $where != '')) {
            $this->db->where($where);
        }

        if (is_numeric($id)) {
            $this->db->where(db_prefix() . 'clients.userid', $id);
            $client = $this->db->get(db_prefix() . 'clients')->row();

            if ($client && get_option('company_requires_vat_number_field') == 0) {
                $client->vat = null;
            }

            $GLOBALS['client'] = $client;

            return $client;
        }

        $this->db->order_by('company', 'asc');

        return $this->db->get(db_prefix() . 'clients')->result_array();
    }

public function get_contacts(){

        $this->db->select('tblcontacts.firstname,tblcontacts.lastname,tblcontacts.email,tblcontacts.phonenumber,tblclients.company,tblclients.active,tblclients.datecreated');
        $this->db->from('tblclients');
        $this->db->join('tblcontacts', 'tblcontacts.id = tblclients.userid ');
        $this->db->where('tblcontacts.is_primary',1);
        $this->db->order_by('tblcontacts.is_primary', 'DESC');
        $result = $this->db->get();
        return $result->result_array();
    }
    public function get_costomer_groups(){
        $query = $this->db->get('tblcustomers_groups');
        return $query->result_array();
    }
     public function get_countries(){
        $query = $this->db->get('tblcountries');
            return $query->result_array();
     }
     public function get_currencies(){
        $query = $this->db->get('tblcurrencies');
            return $query->result_array();
     }
     public function addContact($data){
        $this->db->insert('tblclients',$data);
     }
}
?>