<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class preferences extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('user', '', TRUE);
    }
    
    function password()
    {
        
        if ($this->session->userdata('logged_in')) {
            
            $session_data = $this->session->userdata('logged_in');
            
            $data['username'] = $session_data['username'];
            
            
            $data['error'] = "";
            
            $data['match'] = "";
            
            
            $this->load->helper('form');
            
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('current_password', 'Old Password', 'required|trim|xss_clean|callback_change');
            $this->form_validation->set_rules('password', 'New Password', 'required|min_length[6]|trim');
            $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'required|min_length[6]|trim|matches[password]');
            
            if ($this->form_validation->run() === FALSE) {
                
                $this->load->view('admin/templates/header');
                
                $this->load->view('admin/templates/top', $data);
                
                $this->load->view('admin/preferences');
                
                $this->load->view('admin/templates/footer');
                
                $this->load->view('admin/javascript/preferences');
                
                
            } //$this->form_validation->run() === FALSE
            else {
                
                
                $error = 0;
                
                
                $username = $data['username'];
                
                $current_password = $_POST['current_password'];
                
                
                if ($result['pages'] = $this->user->login2($username, $current_password)) {
                    
                    $data['error'] = "";
                    
                    
                } 
                
                else {
                    
                    $data['error'] = "current password doesn't match";
                    
                    $error = $error + 1;
                    
                }
                
                
                if ($error == 0) {
                    $data['match'] = "password updated";
                    
                    
                    $this->user->update_user($username, $_POST['password_confirm']);
         
                    
                } 
                
         
                $this->load->view('admin/templates/header');
                
                $this->load->view('admin/templates/top', $data);
                
                $this->load->view('admin/preferences');
                
                
                $this->load->view('admin/templates/footer');
                
                $this->load->view('admin/javascript/preferences');
                
            }
            
            
        } 
        
        
        else {
            //If no session, redirect to login page
            redirect(base_url() . 'login', 'refresh');
        }
        
    }
    
    
    ////////////////////////////////////////////////////////////////////////
    
    function create_user()
    {
        
        if ($this->session->userdata('logged_in')) {
            
            $session_data = $this->session->userdata('logged_in');
            
            $data['username'] = $session_data['username'];
            
            
            $this->load->helper('form');
            
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('username', 'username', 'required|min_length[6]|trim');
            $this->form_validation->set_rules('password', 'New Password', 'required|min_length[6]|trim');
            $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'required|min_length[6]|trim|matches[password]');
            
            if ($this->form_validation->run() === FALSE) {
                
                $this->load->view('admin/templates/header');
                
                $this->load->view('admin/templates/top', $data);
                
                $this->load->view('admin/create_user');
                
                $this->load->view('admin/templates/footer');
                
                $this->load->view('admin/javascript/preferences');
                
            }
            else {
                
                $this->user->insert_user();
                redirect(base_url() . 'admin/pagination/international', 'refresh');
                
            }
            
            
        } 
        
        
        else {
            //If no session, redirect to login page
            redirect(base_url() . 'login', 'refresh');
        }
        
    }
    
    
    
}
?>