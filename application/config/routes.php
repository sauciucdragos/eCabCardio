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
$route['examinations/update_dic_examination'] = 'examinations/update_dic_examination';
$route['examinations/edit_dic_examination'] = 'examinations/edit_dic_examination';
$route['examinations/search_dic_examination'] = 'examinations/search_dic_examination';
$route['examinations/create_dic_examination'] = 'examinations/create_dic_examination';
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
