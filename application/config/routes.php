<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| ROUTE CONTROLLER WELCOME
| -------------------------------------------------------------------------
*/
$route['default_controller'] = 'welcome';
$route['login']['get'] = 'login_controller';
$route['login']['post'] = 'login_controller/login';
//$route['login']['post'] = 'welcome/login';
$route['logout']['get'] = 'login_controller/logout';

/*
| -------------------------------------------------------------------------
| ROUTE CONTROLLER PETUGAS
| -------------------------------------------------------------------------
*/
$route['master/petugas'] = 'page_controller/master_petugas';
$route['master/petugas/(:num)'] = 'page_controller/master_petugas/$1';

/*
| -------------------------------------------------------------------------
| ROUTE CONTROLLER PETUGAS
| -------------------------------------------------------------------------
*/
$route['home'] = 'page_controller';
$route['master/siswa'] = 'page_controller/master_siswa';
$route['siswa/([0-9]+)'] = 'petugas/detail/$1';
$route['edit/siswa/([0-9]+)'] = 'petugas/edit/$1';
$route['delete/siswa/([0-9]+)'] = 'petugas/delete/$1';
$route['update/siswa'] = 'petugas/update';

/*
| -------------------------------------------------------------------------
| ROUTE CONTROLLER SISWA
| -------------------------------------------------------------------------
*/

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
