<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Dragons/main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['dragons'] = 'Dragons/index';
$route['create'] = 'Dragons/create';
$route['show/(:any)'] = 'Dragons/show/$1';
$route['update/(:any)'] = 'Dragons/update/$1';
$route['delete/(:any)'] = 'Dragons/delete/$1';
