<?php
class apply extends CI_Controller {
	


	public function __construct()
	{
		parent::__construct();
		
		
		$this->load->helper('url');
		
		$this->load->model('pages_model');
	}

	public function index($slug = FALSE )
	{
		
		
	$data['get_page_catagories'] = $this->pages_model->get_page_catagories();
	 
	 
	 $data['page_list'] = $this->pages_model->get_pages();	
		
		$data['title'] = 'Contact';
		
	
	if ($slug  == FALSE) {  $data['course'] = null ;  } else {
	$data['course'] = str_replace('-', ' ', $slug);
	
	}


	$this->load->view('templates/header', $data);
	 $this->load->view('templates/nav-bar', $data);
	$this->load->view('apply/index2', $data);
	$this->load->view('templates/footer');
	
	$this->load->view('apply/js');
	
	
	}
	
		/////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	

	
}





?>