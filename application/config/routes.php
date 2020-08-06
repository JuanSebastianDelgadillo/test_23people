<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'inicio';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['people'] = 'test/peoples';
$route['people/(:any)'] = 'test/people/$1';
