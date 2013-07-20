<?php

class Pages extends CI_Controller
{
    
    
    
    function __construct()
    {
        parent::__construct();
        
        
        
        $this->load->model('frontpage');
        
    }
    
  
    public function view($page = 'home')
	
    {
   
        $this->load->helper('url');
        
        
        if ($page == 'submit') {
            $page = 'home';
        } 
        
        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        } 
        
        
        
        $data['title'] = ucfirst($page); // Capitalize the first letter
        
        if ($page == 'home') {
            
            
            $data['front_page_images'] = $this->frontpage->get_frontpage_image();
            
            $this->load->view('templates/header', $data);
            $this->load->view('templates/nav-bar.php', $data);
            $this->load->view('pages/' . $page, $data);
            $this->load->view('templates/footer', $data);
            
            ;
        } 
        else {
            
            
            $this->load->view('templates/header', $data);
            $this->load->view('pages/' . $page, $data);
            $this->load->view('templates/footer', $data);
            
        }
        
    }
}

?>