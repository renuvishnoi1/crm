<?php

defined('BASEPATH') or exit('No direct script access allowed');


function init_head($aside = true)
{
    $CI = &get_instance();
    $CI->load->view('admin/includes/head');
    $CI->load->view('admin/includes/header');
   
    if ($aside == true) {
         $CI->load->view('admin/includes/sidebar');
    }
   
}
function init_tail()
{
    $CI = &get_instance();
     $CI->load->view('admin/includes/footer');
}
function admin_url($url = '')
{
    $adminURI = get_admin_uri();

    if ($url == '' || $url == '/') {
        if ($url == '/') {
            $url = '';
        }

        return site_url($adminURI) . '/';
    }

    return site_url($adminURI . '/' . $url);
}
function list_folders($path)
{
    $folders = [];
    foreach (new DirectoryIterator($path) as $file) {
        if ($file->isDot()) {
            continue;
        }
        if ($file->isDir()) {
            array_push($folders, $file->getFilename());
        }
    }

    return $folders;
}
?>