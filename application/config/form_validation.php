<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$config = [
    	
    //Admin panel Rules
    
    'add_client'=>[
    	['field' => 'company', 'label' => 'Company', 'rules' => 'trim|required|min_length[2]|max_length[15]'],
    ],
     'edit_contact'=>[
        ['field' => 'firstname', 'label' => 'First Name', 'rules' => 'trim|required|min_length[2]|max_length[15]'],
        ['field' => 'lastname', 'label' => 'Last Name', 'rules' => 'trim|required|min_length[2]|max_length[15]'],
        ['field' => 'email', 'label' => 'Email', 'rules' => 'trim|required|valid_email'],
        
    ],
    'add_contact'=>[
        ['field' => 'firstname', 'label' => 'First Name', 'rules' => 'trim|required|min_length[2]|max_length[15]'],
        ['field' => 'lastname', 'label' => 'Last Name', 'rules' => 'trim|required|min_length[2]|max_length[15]'],
        ['field' => 'email', 'label' => 'Email', 'rules' => 'trim|required|valid_email'],
        ['field' => 'password', 'label' => 'Password', 'rules' => 'trim|required'],
    ],
    'login'=>[
        ['field' => 'email', 'label' => 'Email Address', 'rules' => 'trim|required|valid_email'],
        ['field' => 'password', 'label' => 'Password', 'rules' => 'trim|required'],
    ]


];

