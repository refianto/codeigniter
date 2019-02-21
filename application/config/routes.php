<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'login';
$route['usr'] = 'usr';
$route['api'] = 'api';
$route['(:any)'] = 'usr/total/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
