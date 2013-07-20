<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class public_control extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        
        
        $this->load->model('pages_model');
        
        $this->load->helper('url');
        
        $this->load->model('frontpage');
        
        
    }
    
    
    
    function index()
    {
        
        
        $data['front_page_images'] = $this->frontpage->get_frontpage_image();
        
        
        $data['get_page_catagories'] = $this->pages_model->get_page_catagories();
        
        
        $data['page_list'] = $this->pages_model->get_pages();
        
        
        $data['title'] = 'Home';
        
        $this->load->view('templates/header', $data);
        
        $this->load->view('templates/nav-bar', $data);
        
        $this->load->view('pages/home', $data);
        
        
        $this->load->view('templates/footer', $data);
    }
    
    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    
    function pages($slug)
	
    {
   
        $data['page_list'] = $this->pages_model->get_pages();
        
        
        $data['get_page_catagories'] = $this->pages_model->get_page_catagories();
        
        
        if ($data['page_content'] = $this->pages_model->get_page_public($slug)) {
            
            $data['title'] = $data['page_content']['title'];
            
            $data['content'] = $data['page_content']['content'];
            
            
            $this->load->view('templates/header', $data);
            
            $this->load->view('templates/nav-bar', $data);
            
            $this->load->view('pages/page', $data);
            
            
            $this->load->view('templates/footer', $data);
            
        } 
        else {
            show_404();
        }
    }
    
    
    
    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    
    function page($slug)
    {
        
        
        $data['page_list'] = $this->pages_model->get_pages();
        
        
        
        $data['get_page_catagories'] = $this->pages_model->get_page_catagories();
        
        
        $data['page_content'] = $this->pages_model->get_page_public($slug);
        
        
        
        if ($data['category'] = $this->pages_model->get_page_catagory_slug($slug)) {
            
            
            $data['title'] = $data['category']['title'];
            
            $data['content'] = $data['category']['content'];
            
            
            $this->load->view('templates/header', $data);
            
            $this->load->view('templates/nav-bar', $data);
            
            $this->load->view('pages/page', $data);
            
            
            $this->load->view('templates/footer', $data);
        } //$data['category'] = $this->pages_model->get_page_catagory_slug($slug)
        else {
            show_404();
        }
        
    }
    

    /////////////////////////////////////////////////////////////////////////////////////////////////////////
  
}

?>