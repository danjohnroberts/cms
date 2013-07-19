<?php
class contact extends CI_Controller {
	


	public function __construct()
	{
		parent::__construct();
		
		
		$this->load->helper('url');
		
		$this->load->model('pages_model');
	}

	public function index()
	{
		
		
		 $data['get_page_catagories'] = $this->pages_model->get_page_catagories();
	 
	 
	 $data['page_list'] = $this->pages_model->get_pages();	
		
		$data['title'] = 'Contact';
		
	


	$this->load->view('templates/header', $data);
	 $this->load->view('templates/nav-bar', $data);
	$this->load->view('contact/index', $data);
	$this->load->view('templates/footer');
	
	$this->load->view('contact/contact');
	
	
	}
	
		/////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	

	
}





?>