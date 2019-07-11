<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| 
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
|$route['news/(:any)'] = 'news/view/$1';
|$route['news'] = 'news';
| $route['(:any)'] = 'pages/view/$1';
|  $route['posts/create_patient/(:any)'] = 'posts/create_patient/view/$1';
*/
$route['consults/medical_letter'] = 'consults/medical_letter';
$route['consults/consult_patient'] = 'consults/consult_patient';
$route['posts/get_city'] = 'posts/get_city';
$route['posts/update_dic_examination'] = 'posts/update_dic_examination';
$route['posts/edit_dic_examination'] = 'posts/edit_dic_examination';
$route['posts/search_dic_examination'] = 'posts/search_dic_examination';
$route['posts/create_dic_examination'] = 'posts/create_dic_examination';
$route['posts/search_patient_result'] = 'posts/search_patient_result';
$route['posts/edit_patient'] = 'posts/edit_patient';
$route['posts/update_patient'] = 'posts/update_patient';
$route['posts/search_patient'] = 'posts/search_patient';
$route['posts/create_patient'] = 'posts/create_patient';
$route['posts/(:any)'] = 'posts/view/$1';
$route['posts'] = 'posts/index';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
