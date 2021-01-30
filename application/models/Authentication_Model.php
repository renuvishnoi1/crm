<?php

defined('BASEPATH') or exit('No direct script access allowed');

use Sonata\GoogleAuthenticator\GoogleAuthenticator;

class Authentication_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('user_autologin');
        // $this->autologin();
    }

    /**
     * @param  string Email address for login
     * @param  string User Password
     * @param  boolean Set cookies for user if remember me is checked
     * @param  boolean Is Staff Or Client
     * @return boolean if not redirect url found, if found redirect to the url
     */
    public function login($email, $password)
    {

         if ((!empty($email)) && (!empty($password))) {            
            
                $table = db_prefix() . 'staff'; 

                $this->db->where('email', $email);
                $this->db->where('password', $password);
            $user = $this->db->get($table)->row();
            //echo $this->db->last_query();
        if ($user->num_rows() == 1)  
        {   
            //return $query->result();
             return true; 

        } else {  
            return false;  
        } 
            
            }

    }

}
