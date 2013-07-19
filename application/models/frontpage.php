<?php
Class frontpage extends CI_Model
{

 
    
   ///////////////////////////////////////////////////////////////////////

public function get_frontpage_image()



{
	
	
	
$query = 	$this->db->select("*")->from('international_front_page_images')->order_by('sort', 'asc')->get()
 ;
	
		//$query = $this->db->get('front_page_images');
		
		return $query->result_array();


}


   ///////////////////////////////////////////////////////////////////////
   
   


public function get_frontpage($slug = FALSE)

{

$query = $this->db->get_where('international_front_page_images', array('id' => $slug));
	
	return $query->row_array();

	
}



///////////////////////////////////////////////////////////////////////

   


	
public function insert_frontpage($file_name)
{
	$this->load->helper('url');
	
	
	
	$data = array(
		'title' => $file_name,
		'description' => $this->input->post('text'),
		'link' => $this->input->post('link'),
		'slug' => $file_name
				
		
	);
	
	return $this->db->insert('international_front_page_images', $data);
}



///////////////////////////////////////////////////////////////////////


function update_frontpage($id, $image_slug){
	
	$this->load->helper('url');

	$data = array(

            'title'=>$this->input->post('title'),
			
			'description'=>$this->input->post('description'),
			
			'link'=>$this->input->post('link'),
			
			'slug'=>$image_slug,
			
		

          );

  $this->db->where('id',$id);

  $this->db->update('international_front_page_images',$data);
  
}



//////////////////////////////////////////////////////////////////////////////////////////////// 

 
 public function frontpage_delete($file_name)
{
	$this->load->helper('url');
	
	
	
	$data = array(
		'id' => $file_name
		
				
		
	);
	
	return $this->db->delete('international_front_page_images', $data);
}

 
}
?>