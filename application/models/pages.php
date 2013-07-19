<?php
Class pages extends CI_Model
{

 
    
   ///////////////////////////////////////////////////////////////////////

public function get_page_catagories()



{
	
	
	
$query = 	$this->db->select("*")->from('pages_catagories')->order_by('sort', 'asc')->get()
 ;
	
		//$query = $this->db->get('front_page_images');
		
		return $query->result_array();


}


   ///////////////////////////////////////////////////////////////////////


	
public function insert_pages($file_name)
{
	$this->load->helper('url');
	
	
	
	$data = array(
		'title' => $file_name,
		'description' => $this->input->post('text'),
		'slug' => $file_name
				
		
	);
	
	return $this->db->insert('pages_catagories', $data);
}



///////////////////////////////////////////////////////////////////////
 
 public function frontpage_delete($file_name)
{
	$this->load->helper('url');
	
	
	
	$data = array(
		'id' => $file_name
		
				
		
	);
	
	return $this->db->delete('front_page_images', $data);
}

 
}
?>