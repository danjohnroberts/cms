<?php
class courses extends CI_Controller {
	


	public function __construct()
	{
		parent::__construct();
		$this->load->model('courses_model');
		
		$this->load->model('pages_model');
		
		$this->load->helper('url');
	}

	public function index()
	{
		$data['courses'] = $this->courses_model->course_type();
		
			
		
		$data['title'] = 'Full Course Archive';
		

		$this->load->view('templates/header', $data);
	
	 	$this->load->view('templates/nav-bar', $data);
	
	
	$this->load->view('courses/index', $data);
	$this->load->view('templates/footer');
	
	}
	
		/////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	
	public function course_type($slug)  /////////////////// Young / Adult / Higher / International
	{
		
		 $data['get_page_catagories'] = $this->pages_model->get_page_catagories();
	 
	 
	 	$data['page_list'] = $this->pages_model->get_pages();
		
		$data['courses'] = $this->courses_model->course_type($slug);
		
		$slug = ucwords($slug);
		
		$data['title'] = $slug;
		
	 


	$this->load->view('templates/header', $data);
	
	$this->load->view('templates/nav-bar', $data);
	
	$this->load->view('courses/index', $data);
	$this->load->view('templates/footer');
	}
	
	
	
		/////////////////////////////////////////////////////////////////////////// Catagory Name
	
		public function cat($slug)
	{
		
		
			 $data['get_page_catagories'] = $this->pages_model->get_page_catagories();
	 
	 
	 	$data['page_list'] = $this->pages_model->get_pages();
		
		
	$data['cat_id'] = $this->courses_model->cat_id($slug);
	
	$data['cat_id'] = $data['cat_id']['id'];
	
	
	
	$data['courses'] = $this->courses_model->catagory($data['cat_id']);
	
	
	//$slug ucwords($slug);
	
	$slug = strtoupper($slug);
	
	$slug = str_replace("-"," ",$slug );
		
	$data['page_name'] = $slug;
		

	$this->load->view('templates/header', $data);
	
	 $this->load->view('templates/nav-bar', $data);
	
	
	$this->load->view('courses/catagory', $data);
	$this->load->view('templates/footer');
	
	}
	
	
			/////////////////////////////////////////////////////////////////////////////////////////////////////////
	

	
		public function course($slug)
	{
	
		$data['course'] = $this->courses_model->course($slug);
		
			 $data['get_page_catagories'] = $this->pages_model->get_page_catagories();
	 
	 
	 	$data['page_list'] = $this->pages_model->get_pages();
		
		
		

	if (empty($data['course']))
	{
		show_404();
	}

	$data['title'] = $data['course']['title'];
	
	$data['url'] = $data['course']['url'];
	
	$data['study_mode'] = $data['course']['study_mode'];
	$data['description'] = $data['course']['description'];
	$data['who'] = $data['course']['who'];
	$data['entry_requirements'] = $data['course']['entry_requirements'];
	$data['what_study'] = $data['course']['what_study'];
	$data['assessed'] = $data['course']['assessed'];
	$data['where'] = $data['course']['where'];
		

	$this->load->view('templates/header', $data);
	
	$this->load->view('templates/nav-bar', $data);
	
	$this->load->view('courses/course', $data);
	$this->load->view('templates/footer');
	
	
	
	}
	
	
			/////////////////////////////////////////////////////////////////////////////////////////////////////////
			
 public function course_category_new() {
		
		
		if ($this->session->userdata('logged_in'))
   
   {
	   
		$session_data = $this->session->userdata('logged_in');
	
		$data['username'] = $session_data['username'];
		

        $data["title"] = "admin | New Page Category";
	
		
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/top', $data);
			
			if ($_POST)
			
			
{
	
	$this->load->helper('form');
	
	$this->load->library('form_validation');
	
	$this->form_validation->set_rules('title', 'Title', 'required');

	
	if ($this->form_validation->run() === FALSE)
	{
	$front['error'] = "";	
	
	} else {
		
	$get_page_catagories = $this->pages_model->get_page_catagories();
	
	$name_taken = null;
	
	foreach ($get_page_catagories as $value)
  {
	  
  if ( $value['title']==$_POST['title']) {
	$name_taken = "true";  } 
  }
  
  if ($name_taken == "true") { $front['error'] = $_POST['title']." has already been taken";}
  
  else {
  $this->pages_model->insert_page_catagory();
  redirect(base_url().'admin/page-categories', 'refresh');
  }
 
		
	}
	
	
}	else {$front['error'] = " "; }

			
		//$front['error'] = " ";
		
		$this->load->view('admin/course_category_new', $front);	
		
	
		$this->load->view('admin/templates/footer');
    }
	
	
	else
   
   {
     //If no session, redirect to login page
     redirect(base_url().'login', 'refresh');
   }
   

	
	}
	
	
	//////////////////////////////////////////////////////////////////////
	
			
	
		public function apply($page = 'home')
{
	
	
	$this->load->helper('url');
			
	/* 
	if ( ! file_exists('application/views/pages/'.$page.'.php'))
	{
		// Whoops, we don't have a page for that!
		show_404();
	}  
	
	 */
	
	$data['title'] = ucfirst($page); // Capitalize the first letter
	
		
		
		$data['get_page_catagories'] = $this->pages_model->get_page_catagories();
		
		$data['page_list'] = $this->pages_model->get_pages();
	
	
	
	$this->load->view('apply/header');
	
	 $this->load->view('templates/nav-bar', $data);
	
	
	$this->load->view('apply/index' , $data);
	$this->load->view('apply/footer');

}


			/////////////////////////////////////////////////////////////////////////////////////////////////////////


  function course_search()
        {
			
			

$input =  $_POST['search'];

//filtering input for xss and sql injection
$input = strip_tags( $input );
$input = mysql_real_escape_string( $input );
$input = trim( $input );
			
			
	 
    	$data['search'] = $input;
		
		
		if ($input == "" or $input =="enter a course search here") {
			
			
			
			
			
			$data['result'] = $this->load->view('courses/no_result', NULL, TRUE);
			
			$data['title'] = 'Search';
			
			
			$this->load->view('templates/header', $data);
		 
		$this->load->view('courses/search', $data);
	 
	 	$this->load->view('templates/footer', $data);
			
			
			
			
		} else {$data['result'] = "Your search term <Strong>".$input."</Strong> gave the following results: ";
		
		
		

    	$data['query']=$this->courses_model->search($this->input->post('search'));
		
		$data['title'] = 'Search';
	 
	    $this->load->view('templates/header', $data);
		
			$data['result'] = $this->load->view('courses/search-table', NULL, TRUE);
		 
		$this->load->view('courses/search', $data);
		
		
	 
	 	$this->load->view('templates/footer', $data);
	
		 }
	
		
		
		}
	

}





?>