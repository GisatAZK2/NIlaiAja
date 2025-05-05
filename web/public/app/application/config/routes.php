<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// DataUser routes
$route['datauser']['get'] = 'DataUser/index'; // GET /datauser
$route['datauser']['post'] = 'DataUser/index'; // POST /datauser
$route['datauser/session']['get'] = 'DataUser/index/session'; // GET /datauser/session
$route['datauser/session']['post'] = 'DataUser/index/session'; // POST /datauser/session
$route['datauser/session/(:any)']['get'] = 'DataUser/index/session/$1'; // GET /datauser/session/{id}
$route['datauser/session/(:any)']['delete'] = 'DataUser/index/session/$1'; // DELETE /datauser/session/{id}
$route['datauser/session/(:any)/link_user']['put'] = 'DataUser/index/session/$1/link_user'; // PUT /datauser/session/{id}/link_user

// Catch-all route for other DataUser endpoints
$route['datauser/(:any)'] = 'DataUser/index/$1';
$route['datauser/(:any)/(:any)'] = 'DataUser/index/$1/$2';
$route['datauser/(:any)/(:any)/(:any)'] = 'DataUser/index/$1/$2/$3';

// Default routes
$route['default_controller'] = 'Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;