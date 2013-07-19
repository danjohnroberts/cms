<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
   $this->load->helper(array('form', 'url'));
   
   $data['username'] = 'dfg';
   
      $this->load->view('admin/templates/header');
	  
	//   $this->load->view('admin/templates/top' , $data);
   
   $this->load->view('admin/login_view');
   
   $this->load->view('admin/templates/footer');
 }

}

?>