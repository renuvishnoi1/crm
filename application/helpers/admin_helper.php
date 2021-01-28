<?php

defined('BASEPATH') or exit('No direct script access allowed');

// function renderView($view,$data=array())
// {

//     //$CI = &get_instance();
//     $CI = &get_instance();
		
//     $CI->load->view('admin/includes/head',$data);
//     $CI->load->view('admin/includes/header');
//      $CI->load->view('admin/includes/sidebar');
// 		$CI->load->view($view);
//       $CI->load->view('admin/includes/footer');
   
// }

// if(!function_exists('view_loader')){

//   function view_loader($view, $vars=array(), $output = false){
//     $CI = &get_instance();
//     return $CI->load->view($view, $vars, $output);
//   }
// }
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
    $CI->load->view('admin/includes/scripts');
}
?>