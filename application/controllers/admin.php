<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class admin extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        
        $this->load->model('courses_model');
        
        $this->load->model('frontpage');
        
        
        $this->load->helper('url');
        
        $this->load->library("pagination");
    }
    
    
    
    function index()
    {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            
            $data['username'] = $session_data['username'];
            

            $data['title'] = 'Home';
            
            $this->load->view('admin/templates/header', $data);
            
            $this->load->view('admin/templates/top', $data);
            
            $this->load->view('admin/index', $data);
            
            $this->load->view('admin/templates/footer', $data);
        } 
        
        else {
            //If no session, redirect to login page
            redirect(base_url() . 'login', 'refresh');
        }
    }
    
    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    
    public function course_type($slug) /////////////////// Young / Adult / Higher / International
    {
        
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            
            $data['username'] = $session_data['username'];
            
            
            $data['courses'] = $this->courses_model->course_type($slug);
            
            $slug = ucwords($slug);
            
            $data['title'] = $slug;
 
            
            //////////////
            
            
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/top', $data);
            $this->load->view('admin/crse_type', $data);
            $this->load->view('admin/templates/footer');
            
        } 
    }
    
 
    /////////////////////////////////////////////////////////////////////////// Catagory Name
    
    public function catagory($slug)
    {
        
        if ($this->session->userdata('logged_in')) {
            
            $session_data = $this->session->userdata('logged_in');
            
            $data['username'] = $session_data['username'];
            
            $data['cat'] = $this->courses_model->cat_id($slug);
            
            
            
            $data['cat_id'] = $data['cat']['id'];
            
            
            $data['cat_name'] = $data['cat']['cat_name'];
            
            
            $data['crse_type'] = $data['cat']['crse_type'];
            
            $data['courses'] = $this->courses_model->catagory($data['cat_id']);
            
            
            ////////////////
            $data['catagory'] = $this->courses_model->course_type();
            ////////////////
            
            
            $slug = ucwords($slug);
            
            $slug = str_replace("-", " ", $slug);
            
            $data['page_name'] = $slug;
            
            $data['title'] = $slug;
            
            
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/top', $data);
            $this->load->view('admin/course_category', $data);
            $this->load->view('admin/templates/footer');
            
        } 
    }
    
    /////////////////////////////////////////////////////////////////////////// END Catagory Name
    
    
    public function course_category_new()
    {
        
        
        if ($this->session->userdata('logged_in')) {
            
            $session_data = $this->session->userdata('logged_in');
            
            $data['username'] = $session_data['username'];
            
            
            $data["title"] = "admin | New Course Category";
            
            
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
                    
                    $get_course_catagories = $this->courses_model->get_course_catagories();
                    
                    $name_taken = null;
                    
                    foreach ($get_course_catagories as $value) {
                        
                        if ($value['cat_name'] == $_POST['title']) {
                            $name_taken = "true";
                        } 
                    } 
                    
                    if ($name_taken == "true") {
                        $front['error'] = $_POST['title'] . " has already been taken";
                    }
                    
                    else {
                        $this->courses_model->insert_course_catagory();
                        redirect(base_url() . 'admin/pagination/international', 'refresh');
                    }
                    
                    
                }
                
                
            } 
            else {
                $front['error'] = " ";
            }

            
            $this->load->view('admin/course_category_new', $front);
            
            
            $this->load->view('admin/templates/footer');
            
            
        }
        
        
        else {
            //If no session, redirect to login page
            redirect(base_url() . 'login', 'refresh');
        }
        
        
        
    }
    
    
    //////////////////////////////////////////////////////////////////////
    
    
    
    public function cat_delete($slug)
    {
        
        if ($this->session->userdata('logged_in')) {
            
            
            $session_data = $this->session->userdata('logged_in');
            
            
            $data['username'] = $session_data['username'];
            
            
            
            $this->load->model('courses_model');
            
            if ((int) $slug > 0) {
                $this->courses_model->cat_delete($slug);
            } 
            
            redirect('admin/pagination/international', 'refresh');
            
        }
        
        
        
        else {
            //If no session, redirect to login page
            redirect(base_url() . 'login', 'refresh');
        }
        
    }
    
    /////////////////////////////////////////////////////////////////
    
    
    function search()
    {
        
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            
            $data['username'] = $session_data['username'];
            
            
            $data['results'] = $this->courses_model->search($this->input->post('search'));
                        
            
            $input = $_POST['search'];
            
            
            
            $data['result'] = "<p>Your search term <Strong>" . $input . "</Strong> gave the following results: <br/></p>";

            
            $data['title'] = 'Search';
            
            $this->load->view('admin/templates/header', $data);
            
            $this->load->view('admin/templates/top', $data);
            
            $this->load->view('admin/courses_search', $data);
            
            $this->load->view('admin/templates/footer', $data);
            
            
        } 
        
    }
    
    
    /////////////////////////////////////////////////////////////////
    
    
    public function course_delete($slug)
    {
        
        if ($this->session->userdata('logged_in')) {
            
            
            $session_data = $this->session->userdata('logged_in');
            
            
            $data['username'] = $session_data['username'];
            
            
            
            $this->load->model('courses_model');
            
            if ((int) $slug > 0) {
                $this->courses_model->course_delete($slug);
            }
            
            redirect('admin/pagination/international', 'refresh');
            
        } 
        
    
        else {
            //If no session, redirect to login page
            redirect(base_url() . 'login', 'refresh');
        }
        
    }
    
    /////////////////////////////////////////////////////////////////
 
    public function course_new($slug = FALSE)
    {
        
        if ($this->session->userdata('logged_in')) {
            
            $session_data = $this->session->userdata('logged_in');
            
            $data['username'] = $session_data['username'];
            
            $data['catagory'] = $this->courses_model->course_type($slug);
            
            $data['title'] = 'Create a Course';
            
    
            $this->load->helper('form');
            
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('description', 'required');
            
            if ($this->form_validation->run() === FALSE) {
                $this->load->view('admin/templates/header', $data);
                $this->load->view('admin/templates/top', $data);
                $this->load->view('admin/course_create');
                $this->load->view('admin/templates/footer');
                
            } 
            else {
                
                $data['cat_id'] = $this->courses_model->cat_id($_POST['catagory']);
                
                $cat_id = $data['cat_id']['id'];
                
                
                $this->courses_model->insert_course($cat_id);
                
                redirect('admin/pagination/international', 'refresh');
            }
            
        } 
        
        
        
        else {
            //If no session, redirect to login page
            redirect(base_url() . 'login', 'refresh');
        }
        
    }

    /////////////////////////////////////////////////////////////////
    
    public function course_update($slug)
    {
        
        if ($this->session->userdata('logged_in')) {
            
            $session_data = $this->session->userdata('logged_in');
            
            $data['username'] = $session_data['username'];
            
            $this->load->helper('form');
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('description', 'description', 'required');
            
            $data['course'] = $this->courses_model->course($slug);
            
   
            ////////////////
            
            
            if (empty($data['course'])) {
                show_404();
            } 
            
            if ($_POST) {
                $data['title'] = $_POST['title'];
                
                $data['description'] = $_POST['description'];
                
                $data['title'] = $_POST['title'];
                
                $data['description'] = $_POST['description'];
                
                
                $data['url'] = $data['course']['url'];
                
                
                $data['cat_id'] = $_POST['catagory'];
                
                
                $data['cat_id'] = $this->courses_model->cat_id($_POST['catagory']);
                
                $data['cat_id'] = $data['cat_id']['id'];
                
                
                $cat_id = $data['cat_id'];
                
                
                $data['study_mode'] = $_POST['study_mode'];
                
                $data['who']                = $_POST['who'];
                $data['entry_requirements'] = $_POST['entry_requirements'];
                $data['what_study']         = $_POST['what_study'];
                $data['assessed']           = $_POST['assessed'];
                $data['where']              = $_POST['where'];
            } 

            else {
                
                $data['title'] = $data['course']['title'];
                
                $data['description'] = $data['course']['description'];
                
                
                
                $data['url'] = $data['course']['url'];
                
                $data['cat_id'] = $data['course']['cat_id'];
                
                
                $data['study_mode'] = $data['course']['study_mode'];
                
                $data['who']                = $data['course']['who'];
                $data['entry_requirements'] = $data['course']['entry_requirements'];
                $data['what_study']         = $data['course']['what_study'];
                $data['assessed']           = $data['course']['assessed'];
                $data['where']              = $data['course']['where'];
                
            }
               
            ////////////////
            
            
            $data['crse_type'] = $this->courses_model->course_id($data['cat_id']);
            
            $data['crse_type'] = $data['crse_type']['crse_type'];
    
            
            $data['catagoryt'] = $this->courses_model->cat_name($data['cat_id']);
            
            
            $data['catagory_name'] = $data['catagoryt']['cat_name'];
            
            $data['cat_url'] = $data['catagoryt']['url'];
            
 
            $data['catagory'] = $this->courses_model->course_type($data['crse_type']);
            
     
            ////////////////
            
            if ($this->form_validation->run() === FALSE) {
                $this->load->view('admin/templates/header', $data);
                $this->load->view('admin/templates/top', $data);
                $this->load->view('admin/course_update', $data);
                $this->load->view('admin/templates/footer');
                
            } //$this->form_validation->run() === FALSE
            
            else {
                $this->load->view('admin/templates/header', $data);
                $this->load->view('admin/templates/top', $data);
                $this->load->view('admin/course_update', $data);
                $this->load->view('admin/templates/footer');
                
                
                $this->courses_model->update_course($slug, $cat_id);
            }
            
        } //$this->session->userdata('logged_in')
        
        else {
            //If no session, redirect to login page
            redirect(base_url() . 'login', 'refresh');
        }
        
    }
    

    
    /////////////////////////////////////////////////////////////////
    
    
    function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect(base_url() . '', 'refresh');
    }
    
 
    /////////////////////////////////////////////////////////////////
    
    
    
    public function all_courses()
    {
        
        
        if ($this->session->userdata('logged_in')) {
            
            
            
            $session_data = $this->session->userdata('logged_in');
            
            $data['username'] = $session_data['username'];
            
            
            $config                = array();
            $config["base_url"]    = base_url() . "admin/all-courses";
            $config["total_rows"]  = $this->courses_model->record_count();
            $config["per_page"]    = 10;
            $config["uri_segment"] = 3;
            
            $config['full_tag_open']  = '<div class="pagination">';
            $config['full_tag_close'] = '</div>';
            
            
            $this->pagination->initialize($config);
            
            $order = "id";
            
            $page            = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data["results"] = $this->courses_model->fetch_courses($config["per_page"], $page, $order);
            $data["links"]   = $this->pagination->create_links();
            
            ///////////////////////////////////////////////////////
            
            $data['catagory'] = $this->courses_model->course_type();
            
            
            ///////////////////////////////////////////////////////
            
            
            
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/top', $data);
            
            $this->load->view("admin/courses_all", $data);
            
            
            
            $this->load->view('admin/templates/footer');
            
            
        } //$this->session->userdata('logged_in')
        
        
        else {
            //If no session, redirect to login page
            redirect(base_url() . 'login', 'refresh');
        }
        
    }

    
    /////////////////////////////////////////////////////////////////
    
   
    public function frontpage()
    {
        
        
        if ($this->session->userdata('logged_in')) {
            
            $session_data = $this->session->userdata('logged_in');
            
            $data['username'] = $session_data['username'];
            
            $data["title"] = "admin | frontpage";       
            
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/top', $data);
            
            if (isset($_POST['post'])) {
                
                
                $config['file_name'] = 'slider';
                $config['overwrite'] = false;
                
                
                $config['upload_path']   = APPPATH . '../images/slides';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '10001';
                $config['max_width']     = '11024';
                $config['max_height']    = '1768';
                
                //$this->upload->initialize($config);
                
                $this->load->library('upload', $config);
                
    
                if (!$this->upload->do_upload()) {
                    $error = array(
                        'error' => $this->upload->display_errors()
                    );
                    
                    $front['error'] = "you did not upload an image";
                    
                    $front['front_page_images'] = $this->frontpage->get_frontpage_image();
                    
                    $this->load->view('admin/frontpage', $front);
                } //!$this->upload->do_upload()
                else {
                    
     
                    $img = $this->upload->data();
                    
                    $img_file_name = $img['file_name'];
                    
                    $this->frontpage->insert_frontpage($img_file_name);
                    
                    $front["error"] = "success!";
                    
                    $front['front_page_images'] = $this->frontpage->get_frontpage_image();
                    
                    $this->load->view('admin/frontpage', $front);
                    
                    
                }
                
                
            } //isset($_POST['post'])
            else {
                
                
                $front['error'] = " ";
                   
                $front['front_page_images'] = $this->frontpage->get_frontpage_image();
                
                $this->load->view('admin/frontpage', $front);
                      
                
            }
              
            
            $this->load->view('admin/templates/footer');
            
            $this->load->view('admin/javascript/frontpage_image_delete', $front);
        } //$this->session->userdata('logged_in')
        
        
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
                } //$updateRecordsArray as $recordIDValue
                
                
                echo '<pre>';
                print_r($updateRecordsArray);
                echo '</pre>';
                echo 'If you refresh the page, you will see that records will stay just as you modified.';
            } //$this->session->userdata('logged_in')
            
        } //$action == "updateRecordsListings"
        else {
            redirect(base_url() . 'login', 'refresh');
            
        }
        
    }
    
    
     
    /////////////////////////////////////////////////////////////////////////// frontpage_delete
    
    public function frontpage_delete($slug)
    {
        
        if ($this->session->userdata('logged_in')) {
            
            
            $session_data = $this->session->userdata('logged_in');
            
            
            $data['username'] = $session_data['username'];
            
            
            
            $this->load->model('frontpage');
            
            if ((int) $slug > 0) {
                $this->frontpage->frontpage_delete($slug);
            } //(int) $slug > 0
            
            redirect(base_url() . 'admin/frontpage');
            //header( 'location:admin/frontpage' );
        } //$this->session->userdata('logged_in')
        
        
        
        else {
            //If no session, redirect to login page
            redirect(base_url() . 'login', 'refresh');
        }
        
    }
    
 
    /////////////////////////////////////////////////////////////////////////// END frontpage_delete
    
    
    ///////////////////////////////////////////////////////////////// Pagination test
    
    
    
    public function pagination()
    {
        
        
        if ($this->session->userdata('logged_in')) {
            
            
            
            $session_data = $this->session->userdata('logged_in');
            
            $data['username'] = $session_data['username'];
            
            
            $config = array();
            
            $test = ($this->uri->segment(3)) ? $this->uri->segment(3) : "all";
            $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
            
            
            $config["base_url"] = base_url() . "admin/pagination/" . $test;
            
            $config["total_rows"]  = $this->courses_model->record_count_catagories($test);
            $config["per_page"]    = 10;
            $config["uri_segment"] = 4;
            
            $config['full_tag_open']  = '<div class="pagination">';
            $config['full_tag_close'] = '</div>';
            
            
            $this->pagination->initialize($config);
            
            $order = "id";
            
            $data["results"] = $this->courses_model->fetch_courses_pagination($config["per_page"], $page, $order, $test);
            $data["links"]   = $this->pagination->create_links();
            
            ///////////////////////////////////////////////////////
            
            $data['catagory'] = $this->courses_model->pagination($test);
            
            
            ///////////////////////////////////////////////////////
            
            
            
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/top', $data);
            
            $this->load->view("admin/pagination", $data);
            
            
            
            $this->load->view('admin/templates/footer');
            
            $this->load->view('admin/javascript/deleteCourseCat', $data);
            
            
        } //$this->session->userdata('logged_in')
        
        
        else {
            //If no session, redirect to login page
            redirect(base_url() . 'login', 'refresh');
        }
        
    }
    
    
    /////////////////////////////////////
 
    
}


?>