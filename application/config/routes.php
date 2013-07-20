<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


///////////////////////////////////////////////////////////////


//$route['/'] = 'public_control/index';

$route['page/(:any)'] = 'public_control/page/$1';

$route['pages/(:any)'] = 'public_control/pages/$1';



$route['default_controller'] = 'public_control/index';



/////////////////////////////////////////////////////////////// 


$route['login'] = 'login';

$route['verifylogin'] = 'verifylogin';

$route['admin/logout'] = 'admin/logout';

$route['admin/preferences'] = 'preferences/password';

$route['admin/create-user'] = 'preferences/create_user';

/////////////////////////////////////////////////////////////// pages and page catagories

$route['admin/pages'] = 'admin/pages/pages';


$route['admin/page-categories'] = 'pages_control/page_catagories';


$route['admin/new-page-category'] = 'pages_control/page_category_new';


$route['admin/page-category-update/(:any)'] = 'pages_control/page_category_update/$1';



$route['admin/new-page'] = 'pages_control/page_new/';

$route['admin/new-page/(:any)'] = 'pages_control/page_new/$1';

$route['admin/page-update/(:any)'] = 'pages_control/page_update/$1';


$route['page-catagory-delete/(:any)'] = 'pages_control/page_catagory_delete/$1';

$route['page-delete/(:any)/(:any)'] = 'pages_control/page_delete/$1/$2';




$route['admin/sort_pages/(:any)'] = 'pages_control/sort_pages/$1';

/////////////////////////////////////////////////////////////// END pages and page catagories

$route['admin'] = 'admin/index';



$route['admin/all-courses'] = 'admin/all_courses';

$route['admin/all-courses/(:any)'] = 'admin/all_courses/$1';





$route['admin/pagination'] = 'admin/pagination';
$route['admin/pagination/(:any)'] = 'admin/pagination/$1';

$route['admin/pagination/(:any)/(:any)/'] = 'admin/pagination/$1/$2';

$route['admin/courses'] = 'admin/course_type';

$route['admin/young'] = 'admin/course_type/young';

$route['admin/adult'] = 'admin/course_type/adult';

$route['admin/higher'] = 'admin/course_type/higher';

$route['admin/international'] = 'admin/course_type/international';

$route['admin/category/(:any)'] = 'admin/catagory/$1';



$route['admin/course_delete/(:any)'] = 'admin/course_delete/$1';

$route['course_delete/(:any)'] = 'admin/course_delete/$1';

$route['admin/new-course'] = 'admin/course_new';

$route['admin/new-course/(:any)'] = 'admin/course_new/$1';

$route['admin/new-course-category'] = 'admin/course_category_new';

$route['admin/cat-delete/(:any)'] = 'admin/cat_delete/$1';





$route['admin/update-course/(:any)'] = 'admin/course_update/$1';

$route['admin/write-course/(:any)'] = 'admin/course_update_write/$1';

$route['admin/search'] = 'admin/search';

$route['admin/frontpage'] = 'admin/frontpage';

$route['admin/frontpage-update/(:any)'] = 'admin_frontpage/frontpage_update/$1';


$route['admin/frontpage-sort'] = 'admin/frontpage_sort';
$route['frontpage_delete/(:any)'] = 'admin/frontpage_delete/$1';


$route['admin/do_upload'] = 'admin/do_upload';






/////////////////////////////////////////////////////////////// Public /////////////////////////////////////////////////

$route['apply/(:any)'] = 'apply/apply/$1';

//$route['apply/(:any)'] = 'courses/apply/$1';

//$route['apply'] = 'courses/apply';

$route['contact'] = 'contact';

///////////////////////////////////////////////////////////////
 



$route['courses'] = 'courses/course_type/international';


$route['courses/(:any)'] = 'courses/cat/$1';

$route['course'] = 'courses/course';

$route['course/(:any)'] = 'courses/course/$1';


$route['search'] = 'courses/course_search';

$route['search/(:any)'] = 'courses/course_search/$1';

///////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////// 

$route['ajax/form'] = 'ajax/form';

$route['ajax/apply'] = 'ajax/apply';
