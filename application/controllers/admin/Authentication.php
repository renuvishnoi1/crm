<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Authentication extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Authentication_Model');
       
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

     
     if ($this->input->post()) {
            if ($this->form_validation->run('login') !== false) {

                $email= $this->input->post('email');
                $password = $this->input->post('password');
                $data = $this->Authentication_Model->login($email,hash($password));

            if($data){
                echo "<pre>";
            print_r($data);
            die();
            }
            }else{
              $this->load->view('login');
            }
        }else{
            $this->load->view('login');
        }
       
    }
    
    public function register(){
    	$this->load->view('register');

    }
    public function logout()  
    {  
        //removing session  
        $this->session->unset_userdata('user');  
        redirect("admin/login");  
    } 

   
}
