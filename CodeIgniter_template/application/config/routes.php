<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "welcome";
$route['404_override'] = '';


//BASED SA API
//===USER DATABASE
//---NEW USER
$route['user/register'] = 'database/showUsers/$1'; //add new user to database //no need for other params
$route['user/login'] = 'database/showUsers/$1'; //login page 

//---USER DATA
$route['user/(:any)'] = 'database/getAllUsers';//get user from db
$route['user/getUser//(:any)'] = 'database/getUser/$1'; //show user info //WORKS BETCH


//===CREATURE DATABASE
//---CREATURES
$route['creature/(:any)'] = 'database/showUsers/$1'; //get creature from db
$route['creature/(:any)/creature_information'] = 'database/showUsers/$1'; //get creature info

//---USER CREATURES
$route['user/(:any)/(:any)'] = 'database/showUsers/$1'; //get user creature from db
$route['user/(:any)/(:any)/user_creature_information'] =  'database/showUsers/$1'; //show user creatures

//---MOVES
$route['creature/(:any)/(:any)'] = 'database/showUsers/$1'; //get move from db
$route['creature/(:any)/(:any)/moves_information'] = 'database/showUsers/$1'; // show move from db

//---USER CREATURE MOVES
$route['user/(:any)/(:any)/(:any)/'] = 'database/showUsers/$1';;
$route['user/(:any)/(:any)/(:any)/user_creature_moves_information'] = 'database/showUsers/$1';;

//===NAVIGATION
//---Locations
$route['gps/(:any)/location_information'] = 'database/showUsers/$1';
$route['gps/(:any)/(:any)'] = 'database/showUsers/$1';





/* End of file routes.php */
/* Location: ./application/config/routes.php */