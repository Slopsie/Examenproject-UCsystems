<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['posts'] = 'posts/index';

$route['tickets'] = 'tickets/index';

$route['statistics'] = 'statistics/index';
//$route['tickets/(:any)'] = 'tickets/view/$1'; //verwijder dit nog niet... dit is een tijdelijke fix om die pagina even te zien

$route['default_controller'] = 'pages/view';

$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;