<?php
Class pages_model extends CI_Model
{

 
    
   ///////////////////////////////////////////////////////////////////////

public function get_page_catagories()

{
	
	
$query = 	$this->db->select("*")->from('international_pages_catagories')->order_by('sort', 'asc')->get()  ;

	
		//$query = $this->db->get('front_page_images');	
		
		return $query->result_array();

}


   ///////////////////////////////////////////////////////////////////////
 

	
public function insert_page_catagory()
{
	$this->load->helper('url');
	
	$slug = url_title($this->input->post('title'), 'dash', TRUE);
	
	$data = array(
		'title' =>$this->input->post('title'),
		'content' => $this->input->post('content'),
		'slug' => $slug,
		
		//'slug' => $file_name
				
		
	);
	
	return $this->db->insert('international_pages_catagories', $data);
}



///////////////////////////////////////////////////////////////////////
 
 public function page_catagory_delete($file_name)
{
	$this->load->helper('url');
	
	
	
	$data = array(
		'id' => $file_name
		
				
		
	);
	
	return $this->db->delete('international_pages_catagories', $data);
}




///////////////////////////////////////////////////////////////////////
 
 public function page_delete($file_name)
{
	$this->load->helper('url');
	
	
	
	$data = array(
		'id' => $file_name
		
				
		
	);
	
	return $this->db->delete('international_pages', $data);
}


///////////////////////////////////////////////////////////////////


	
public function insert_page($slug = FALSE)
{
	$this->load->helper('url');
	
	$url = url_title($this->input->post('title'), 'dash', TRUE);
	
	$data = array(
		'title'     =>$this->input->post('title'),
		'content'   => $this->input->post('content'),
		'slug'      => $url,
		
		'pages_catagories_id'  => $this->input->post('category')
		
		//'slug' => $file_name
				
		
	);
	
	return $this->db->insert('international_pages', $data);
}



///////////////////////////////////////////////////////////////////////

public function get_pages($slug = FALSE)



{
	
	if ($slug === FALSE)
	{
	
$query = 	$this->db->select("*")->from('international_pages')->order_by('sort', 'asc')->get()
 ;
	
		//$query = $this->db->get('front_page_images');
		
		return $query->result_array();
		
	}
	
	
	$query = 	$this->db->order_by("sort", "asc"); 

	
	$query = $this->db->get_where('international_pages', array('pages_catagories_id' => $slug));
	
	return $query->result_array();


}




///////////////////////////////////////////////////////////////////////

public function get_page($slug = FALSE)

{

$query = $this->db->get_where('international_pages', array('id' => $slug));
	
	return $query->row_array();

	
}



///////////////////////////////////////////////////////////////////////

  
   
   public function get_page_catagory($url = FALSE)

{
	
$query = $this->db->get_where('international_pages_catagories', array('id' => $url));
	
	return $query->row_array();

	
}


////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////

  
   
   public function get_page_catagory_slug($url = FALSE)

{
	
$query = $this->db->get_where('international_pages_catagories', array('slug' => $url));
	
	return $query->row_array();

	
}


////////////////////////////////////////////////////////



  
   
   public function get_page_catagory_title($url = FALSE)

{
	
$query = $this->db->get_where('international_pages_catagories', array('title' => $url));
	
	return $query->row_array();

	
}


////////////////////////////////////////////////////////



public function get_page_public($slug = FALSE)

{

$query = $this->db->get_where('international_pages', array('slug' => $slug));
	
	return $query->row_array();


	
	
}
///////////////////////////////////////////////////////////////////////




public function page_cat_id($slug = FALSE)
{
	
	
	$query = $this->db->get_where('international_pages_catagories', array('id' => $slug));
	return $query->row_array();
	
}
/////////////////////////////////////////////////


 public function pages_count($international_pages_catagories_id = FALSE) {
	 
	 $query = $this->db->get_where('international_pages', array('pages_catagories_id'=>$international_pages_catagories_id));
	return  $query->num_rows(); 
	    
    }
	
	
	

///////////////////////////////////////////////// 


function update_page($hon){
	
	$this->load->helper('url');

	$data = array(

            'title'=>$this->input->post('title'),
			
			'content'=>$this->input->post('content'),
			
			'slug'=>$hon,
			
			'pages_catagories_id'=>$this->input->post('get_page_catagory_list'),

          );

  $this->db->where('id',$this->input->post('slug'));

  $this->db->update('international_pages',$data);
  
}


 ////////////  ///////////////////  /////////////////  /////////////////  //////////
 

public function page_cat($slug)

{
	

	$query = $this->db->get_where('international_pages', array('pages_catagories_id' => $slug));
	
	return $query->result_array();
	
	//return $query->row_array();

}



 ////////////  ///////////////////  /////////////////  /////////////////  //////////
 





function update_category($hon, $url){
	
	$this->load->helper('url');
	
	$data = array(

            'title'=>$this->input->post('title'),
			
			'content' => $this->input->post('content'),
			
			'slug'=>$url, 

          );

  $this->db->where('id',$this->input->post('cat_id'));

  $this->db->update('international_pages_catagories',$data);
  
}
 
 ///////////////////////////////////////////////// 
 
}
?>