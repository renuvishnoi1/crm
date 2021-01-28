<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Authentication extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
       
    }

    public function index()
    {
        $this->login();
    }

    // Added for backward compatibilies
    // public function admin()
    // {
    //     redirect(admin_url('authentication'));
    // }

    public function login()
    {
     $this->load->view('login');
       
    }
    public function register(){
    	$this->load->view('register');

    }

   
}
