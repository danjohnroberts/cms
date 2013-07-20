<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class admin_frontpage extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        
   
        $this->load->model('frontpage');
        
        
        $this->load->helper('url');
  
    }
    
   
    
    /////////////////////////////////////////////////////////////////
  
    
    public function frontpage_update($slug)
    {
          
        if ($this->session->userdata('logged_in')) {
            
            $session_data = $this->session->userdata('logged_in');
            
            $data['username'] = $session_data['username'];
            
            $data['frontpage'] = $this->frontpage->get_frontpage($slug);   
            
            $data['id'] = $slug;
            
            $data['slug'] = $data['frontpage']['slug'];
      
            
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/top', $data);
    
            
            if (isset($_POST['title'])) {
                
                
                $data["title"] = $_POST['title'];
                
                $data['description'] = $_POST['description'];
                
                $data['link'] = $_POST['link'];
                
    
                $config['file_name']     = 'slider';
                $config['overwrite']     = false;
                $config['upload_path']   = APPPATH . '../images/slides';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '10001';
                $config['max_width']     = '11024';
                $config['max_height']    = '1768';
                
                $this->load->library('upload', $config);
  
                if (!$this->upload->do_upload()) {
       
                    
                    $data["slug"] = $data['frontpage']['slug'];
        
                } 
				
                else {
                    $img = $this->upload->data();
                    
                    $data["slug"] = $img['file_name'];
                    
                }
                
      
                $this->frontpage->update_frontpage($slug, $data["slug"]);
                
                $data["error"] = "updated";
      
            } 
            
            
            else {
                
                
                
                $data["title"] = $data['frontpage']['title'];
                
                $data['description'] = $data['frontpage']['description'];
                
                $data['link'] = $data['frontpage']['link'];
                      
                $data['error'] = "";
 
                
            }
            
            $this->load->view('admin/frontpage_update', $data);
            
            $this->load->view('admin/templates/footer');
        }
        
        
        else {
            //If no session, redirect to login page
            redirect(base_url() . 'login', 'refresh');
        }
        
    }
    
      
    /////////////////////////////////////////////////////////////////
	
    public function frontpage_sort()
    {
        
        
        
        $dbhost = "localhost";
        $dbuser = "waltham_userland";
        $dbpass = "LR[~J.6n7D@R";
        $dbname = "waltham_mobile";
        
        $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die("Error connecting to mysql");
        mysql_select_db($dbname);
        
        $action             = mysql_real_escape_string($_POST['action']);
        $updateRecordsArray = $_POST['recordsArray'];
        
        
        
        if ($action == "updateRecordsListings") {
            
            if ($this->session->userdata('logged_in')) {
                
                $listingCounter = 1;
                foreach ($updateRecordsArray as $recordIDValue) {
                    
                    $query = "UPDATE international_front_page_images SET sort = " . $listingCounter . " WHERE id = " . $recordIDValue;
                    mysql_query($query) or die('Error, insert query failed');
                    $listingCounter = $listingCounter + 1;
                } 
                
                
                echo '<pre>';
                print_r($updateRecordsArray);
                echo '</pre>';
                echo 'If you refresh the page, you will see that records will stay just as you modified.';
            }
            
        } 
        else {
            redirect(base_url() . 'login', 'refresh');
            
        }
        
    }
    

    public function frontpage_delete($slug)
    {
        
        if ($this->session->userdata('logged_in')) {
            
            
            $session_data = $this->session->userdata('logged_in');
     
            $data['username'] = $session_data['username'];       
            
            $this->load->model('frontpage');
            
            if ((int) $slug > 0) {
                $this->frontpage->frontpage_delete($slug);
            } 
            
            redirect(base_url() . 'admin/frontpage');
          
        } 
          
        else {
            //If no session, redirect to login page
            redirect(base_url() . 'login', 'refresh');
        }
        
    }

    /////////////////////////////////////////////////////////////////////////// END Catagory Name

    
}



?>