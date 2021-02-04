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

        $this->db->where('email', $email);
         $query = $this->db->get('tblstaff');
         $result = $query->row_array(); // get the row first
        
    if (!empty($result) && password_verify($password, $result['password'])) {
        // if this username exists, and the input password is verified using password_verify
        return $result;
    } else {
        return false;
    }

    }

}
