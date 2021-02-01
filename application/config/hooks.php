<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/
function hooks()
{
    global $hooks;

    return $hooks;
}

$hook['pre_system'][] = [
        'class'    => 'BadUserAgentBlock',
        'function' => 'init',
        'filename' => 'BadUserAgentBlock.php',
        'filepath' => 'hooks',
        'params'   => [],
];

$hook['pre_system'][] = [
        'class'    => 'App_Autoloader',
        'function' => 'register',
        'filename' => 'App_Autoloader.php',
        'filepath' => 'hooks',
        'params'   => [],
];

$hook['pre_controller'][] = [
        'class'    => 'EloquentHook',
        'function' => 'bootEloquent',
        'filename' => 'EloquentHook.php',
        'filepath' => 'hooks',
];

$hook['pre_controller_constructor'][] = [
        'class'    => '',
        'function' => '_app_init',
        'filename' => 'InitHook.php',
        'filepath' => 'hooks',
];

if (file_exists(APPPATH . 'config/my_hooks.php')) {
    include_once(APPPATH . 'config/my_hooks.php');
}