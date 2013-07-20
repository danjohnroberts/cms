<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class pages_control extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        
        
        
        $this->load->model('pages_model');
        
        $this->load->helper('url');
        
        
    }
    
    
    
    public function page_catagories()
    {
        
        
        if ($this->session->userdata('logged_in')) {
            
            $session_data = $this->session->userdata('logged_in');
            
            $data['username'] = $session_data['username'];
            
            
            $data["title"] = "admin | Page Catagories";
            
            $front['get_page_catagories'] = $this->pages_model->get_page_catagories();
            
            
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/top', $data);
            
            $this->load->view('admin/pages_catagories', $front);
            
            
            $this->load->view('admin/templates/footer');
        }
        
        
        else {
            //If no session, redirect to login page
            redirect(base_url() . 'login', 'refresh');
        }
        
        
        
    }
    
    
    //////////////////////////////////////////////////////////////////////
    
    
    public function page_category_new()
    {
        
        
        if ($this->session->userdata('logged_in')) {
            
            $session_data = $this->session->userdata('logged_in');
            
            $data['username'] = $session_data['username'];
            
            
            $data["title"] = "admin | New Page Category";
            
            
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/top', $data);
            
            if ($_POST) {
                
                $this->load->helper('form');
                
                $this->load->library('form_validation');
                
                $this->form_validation->set_rules('title', 'Title', 'required');
                
                
                if ($this->form_validation->run() === FALSE) {
                    $front['error'] = "";
                    
                } 
                else {
                    
                    $get_page_catagories = $this->pages_model->get_page_catagories();
                    
                    $name_taken = null;
                    
                    foreach ($get_page_catagories as $value) {
                        
                        if ($value['title'] == $_POST['title']) {
                            $name_taken = "true";
                        } 
                    } 
                    
                    if ($name_taken == "true") {
                        $front['error'] = $_POST['title'] . " has already been taken";
                    }
                    
                    else {
                        $this->pages_model->insert_page_catagory();
                        redirect(base_url() . 'admin/page-categories', 'refresh');
                    }
                    
                    
                }
                
                
            } 
            else {
                $front['error'] = " ";
            }
            
 
            $this->load->view('admin/page_category_new', $front);
            
            
            $this->load->view('admin/templates/footer');
        } 
        
        
        else {
            //If no session, redirect to login page
            redirect(base_url() . 'login', 'refresh');
        }
        

    }
    
    
    //////////////////////////////////////////////////////////////////////
    

    
    public function page_delete($slug, $slug2)
    {
        
        if ($this->session->userdata('logged_in')) {
            
            
            $session_data = $this->session->userdata('logged_in');
            
            
            $data['username'] = $session_data['username'];

            
            if ((int) $slug > 0) {
                $this->pages_model->page_delete($slug);
            } 
            
            
            
            redirect(base_url() . 'admin/page-category-update/' . $slug2, 'refresh');
            
            
            
        }
        
        
        
        else {
            //If no session, redirect to login page
            redirect(base_url() . 'login', 'refresh');
        }
        
    }
    //////////////////////////////////////////////////////////////////////

    
    public function page_update($slug)
    {
        
        if ($this->session->userdata('logged_in')) {
            
            
            $this->load->helper('form');
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('title', 'Title', 'required');
            
            $session_data = $this->session->userdata('logged_in');
            
            $data['username'] = $session_data['username'];

            $data['get_page_catagory_list'] = $this->pages_model->get_page_catagories();
            
            
            if ($_POST) {
                
                
                $url = url_title($_POST['title'], 'dash', TRUE);
                
                
                $this->pages_model->update_page($url);
                
                
                $data['title'] = $_POST['title'];
                
                
                $data['content'] = $_POST['content'];
                
                
                $data['slug'] = $_POST['slug'];
                
                $data['get_page_catagories'] = $_POST['get_page_catagory_list'];
   
                
            } 
            else {
                
                
                
                $data['pages'] = $this->pages_model->get_page($slug);
                
                $data['id'] = $slug;
                
                $data['title'] = $data['pages']['title'];
                
                $data['content'] = $data['pages']['content'];
                
                $data['slug'] = $slug;
                
                
                $data['get_page_catagories'] = $data['pages']['pages_catagories_id'];
                
            }
            
            
            $data['catagory_name'] = $this->pages_model->page_cat_id($data['get_page_catagories']);
            
            $data['catagory_name'] = $data['catagory_name']['title'];
            
            
            if ($this->form_validation->run() === FALSE) {
                $data['info'] = "";
                $this->load->view('admin/templates/header', $data);
                $this->load->view('admin/templates/top', $data);
                $this->load->view('admin/page_update', $data);
                $this->load->view('admin/templates/footer');
            } //$this->form_validation->run() === FALSE
            
            else {
                
                
                $data['info'] = "Page updated";
                
                $this->load->view('admin/templates/header', $data);
                $this->load->view('admin/templates/top', $data);
                $this->load->view('admin/page_update', $data);
                $this->load->view('admin/templates/footer');
                
            }
            
        } //$this->session->userdata('logged_in')
        
        else {
            //If no session, redirect to login page
            redirect(base_url() . 'login', 'refresh');
        }
        
    }
    
    
    //////////////////////////////////////////////////////////////////////
    
    public function page_category_update($slug)
    {
        
        if ($this->session->userdata('logged_in')) {
            
            $this->load->helper('form');
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('title', 'Title', 'required');
            
            $session_data = $this->session->userdata('logged_in');
            
            $data['username'] = $session_data['username'];
            
            
            $data['get_pages'] = $this->pages_model->get_pages($slug);
            
            
            if ($_POST) {
                
                
                $url = url_title($_POST['title'], 'dash', TRUE);
                
                
                $this->pages_model->update_category($slug, $url);
                
                
                $data['title'] = $_POST['title'];
                
                $data['content'] = $_POST['content'];
                
                
                $data['cat_id'] = $_POST['cat_id'];
                
        
            }
            else {
                
                
                $data['category'] = $this->pages_model->get_page_catagory($slug);
                
                
                $data['title'] = $data['category']['title'];
                
                $data['content'] = $data['category']['content'];
                
                $data['cat_id'] = $slug;
                
            }
            
            $this->load->view('admin/templates/header', $data);
            
            $this->load->view('admin/templates/top', $data);
            
            
            if ($this->form_validation->run() === FALSE) {
                
                $data['info'] = "";
                
                $this->load->view('admin/page_category_update', $data);
                
            } 
            else {
                
                
                $data['info'] = "Page Category updated";
                
                $this->load->view('admin/page_category_update', $data);
            }
            
            $this->load->view('admin/templates/footer', $data);
            
            $this->load->view('admin/javascript/page_cat_update', $data);
            
        } 
        
        else {
            //If no session, redirect to login page
            redirect(base_url() . 'login', 'refresh');
        }
        
    }
    
    
    //////////////////////////////////////////////////////////////////////
    
    
    public function page_catagory_delete($slug)
    {
        
        if ($this->session->userdata('logged_in')) {
            
            
            $session_data = $this->session->userdata('logged_in');
            
            
            $data['username'] = $session_data['username'];
            
            
            
       
            
            if ((int) $slug > 0) {
                $this->pages_model->page_catagory_delete($slug);
            } 
            
            redirect(base_url() . 'admin/page-categories', 'refresh');
            
        } 
        
        
        
        else {
            //If no session, redirect to login page
            redirect(base_url() . 'login', 'refresh');
        }
        
    }
    

    /////////////////////////////////////////////////////////
    
    public function sort_pages($slug)
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
            
            
            
            $listingCounter = 1;
            foreach ($updateRecordsArray as $recordIDValue) {
                
                $query = "UPDATE $slug SET sort = " . $listingCounter . " WHERE id = " . $recordIDValue;
                mysql_query($query) or die('Error, insert query failed');
                $listingCounter = $listingCounter + 1;
            } 
            
            
            echo '<pre>';
            print_r($updateRecordsArray);
            echo '</pre>';
            echo 'If you refresh the page, you will see that records will stay just as you modified.';
        } 
        
        
    }
    
    /////////////////////////////////////////////////////////
    

    
    public function page_new($slug = null)
    {
        
        
        if ($this->session->userdata('logged_in')) {
            
            $session_data = $this->session->userdata('logged_in');
            
            $data['username'] = $session_data['username'];
            
            
            
            $data["title"] = "admin | New Page";
            
        
            $data["category_select"] = $slug;
            
            
            
            $data['page_catagories'] = $this->pages_model->get_page_catagories();
            
            $data["catagory_id"] = $slug;
            
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/top', $data);
            
            
            if ($_POST) {
                
                
                $data["category_select"] = $_POST['category'];
                
                $data["get_page_catagories"] = $this->pages_model->get_page_catagory_title($_POST['category']);
                
                
                $this->load->helper('form');
                
                $this->load->library('form_validation');
                
                $this->form_validation->set_rules('title', 'Title', 'required');
                
                
                
                if ($this->form_validation->run() === FALSE) {
                    $front['error'] = "";
                    
                } 
                else {
           
                    
                    $get_page = $this->pages_model->get_pages($slug);
                    
                    
                    
                    $name_taken = null;
                    
                    foreach ($get_page as $value) {
                        
                        if ($value['title'] == $_POST['title']) {
                            $name_taken = "true";
                        } 
                    } 
                    
                    if ($name_taken == "true") {
                        $front['error'] = $_POST['title'] . " has already been taken";
                    }
                    
                    else {
    
                        $this->pages_model->insert_page($slug);
                        
                        
                        redirect(base_url() . 'admin/page-category-update/' . $_POST['category'], 'refresh');
    
                        
                    }
                    
                    
                    
                }
                
                
            } 
            else {
                $front['error'] = " ";
            }
            
            $front['get_pages'] = $this->pages_model->get_pages($slug);
            
            
            
            
            $this->load->view('admin/pages_new', $front);
            
            $this->load->view('admin/templates/footer');
            
            
        } 
        
        else {
            //If no session, redirect to login page
            redirect(base_url() . 'login', 'refresh');
        }
        
        
        
    }
    
    
    //////////////////////////////////////////////////////////////////////
    
}

?>