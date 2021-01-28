<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ContactController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ContactsModel');
       
    }

    public function index()
    {
        $data['records']= $this->ContactsModel->get_contacts();
       // echo "<pre>";
       // print_r($data);
       // die();
      $this->load->view('admin/contacts/contact_list',$data); 
    }

    
   
   
}
