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
        $data['title'] = "Login";
     
     if ($this->input->post()) {
            if ($this->form_validation->run('login') !== false) {

                $email= $this->input->post('email');
                $password = $this->input->post('password');
                $data = $this->Authentication_Model->login($email,$password);

            if($data){

               redirect('admin/dashboard');
            }
            }else{
              $this->load->view('login',$data);
            }
        }else{
            $this->load->view('login',$data);
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
    public function admin_register(){
        
    }

   
}
