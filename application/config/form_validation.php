<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$config = [
    	
    //Admin panel Rules
    
    'add_contact'=>[
    	['field' => 'company', 'label' => 'Company', 'rules' => 'trim|required|min_length[2]|max_length[15]'],
    ],
    'login'=>[
        ['field' => 'email', 'label' => 'Email Address', 'rules' => 'trim|required|valid_email'],
        ['field' => 'password', 'label' => 'Password', 'rules' => 'trim|required'],
    ],
    'edit_api'=>[
         ['field' => 'name', 'label' => 'Api Name', 'rules' => 'trim|required|min_length[2]|max_length[15]'],
         ['field' => 'description', 'label' => 'Description', 'rules' => 'trim|required'],
         ['field' => 'base_url', 'label' => 'base url', 'rules' => 'required']
         ,
         ['field' => 'request_method', 'label' => 'Request Method', 'rules' => 'required']
         ,
         ['field' => 'project', 'label' => 'Project', 'rules' => 'required']
         ,
         ['field' => 'module', 'label' => 'Module', 'rules' => 'required']
    ]


];

