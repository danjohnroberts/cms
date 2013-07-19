<?php

class courses_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}


///////////////////////////////////////////////////////////////////////

    function search($search)
    {
		
	$this->db->like('title', $search);
		
	/*
	$this->db->from('resources');
$this->db->where('status', 'published');
$this->db->like('title', $term);
$this->db->or_like('tags', $term); 
*/
	
	$query = $this->db->get('courses');
	
//$query	= 	$data['courses'] = $this->db->get();
		
  	return $query->result_array();

    }

///////////////////////////////////////////////////////////////////////


   

	public function course_type($slug = FALSE)
{
	if ($slug === FALSE)
	{
		$query = $this->db->get('catagory');
		return $query->result_array();
	}
	
	
	
	$query = $this->db->order_by('cat_name', 'asc')->get_where('catagory', array('crse_type' => $slug) );
	
	
	
	
	
	return $query->result_array();
}





///////////////////////////////////////////////////////////////////////

public function catagory($slug = FALSE)

{
	
	if ($slug === FALSE)
	{
		$query = $this->db->get('catagory');
		return $query->result_array();
	}
	

	$query = $this->db->get_where('courses', array('cat_id' => $slug));
	
	return $query->result_array();
	

}


///////////////////////////////////////////////////////////////////////  called from Admin


public function all_courses($slug = FALSE)

{
	
	if ($slug === FALSE)
	{

		$query = $this->db->get('courses');
		
		return $query->result_array();
	}
	

//	  $query = $this->db->get('courses', $num, $offset);	
	  
	
	return $query->result_array();
	
	//return $query->row_array();
	

}


///////////////////////////////////////////////////////////////////////

public function course($slug)

{
	
$query = $this->db->get_where('courses', array('url' => $slug));
	
return $query->row_array();

}

///////////////////////////////////////////////////////////////////////

   

	public function course_id($slug = FALSE)
{
	
	
	$query = $this->db->get_where('catagory', array('id' => $slug));
	return $query->row_array();
	
}


///////////////////////////////////////////////////////////

public function cat_id($slug)

{
	
$query = $this->db->get_where('catagory', array('url' => $slug));


	
return $query->row_array();

}

///////////////////////////////////////////////////////////////////////


public function crse_type($slug)

{
	
$query = $this->db->get_where('catagory', array('id' => $slug));


	
return $query->row_array();

}

///////////////////////////////////////////////////////////////////////

public function cat_name($slug)

{
	
$query = $this->db->get_where('catagory', array('id' => $slug));


	
//return $query->result_array();
return $query->row_array();
}


///////////////////////////////////////////////////////////////////////

public function course_delete($slug)

{
	
//$this->load->database();


$this->db->delete('courses', array('id' => $slug)); 
	

}


///////////////////////////////////////////////////////////////////////
	
public function insert_course($cat_id)
{
	$this->load->helper('url');
	
	$slug = url_title($this->input->post('title'), 'dash', TRUE);
	
	$data = array(
		'title' => $this->input->post('title'),
		'url' => $slug,
		'cat_id' => $cat_id,
		'description' => $this->input->post('description'),
		
		'study_mode' => $this->input->post('study_mode'),
		
		'description' => $this->input->post('description'),
		
		'who' => $this->input->post('who'),
		
		'entry_requirements' => $this->input->post('entry_requirements'),	
	
		'what_study' => $this->input->post('what_study'),	
	
		'assessed' => $this->input->post('assessed'),	
		
		'where' => $this->input->post('where'),
		
	);
	
	return $this->db->insert('courses', $data);
}


///////////////////////////////////////////////////////////////////////
	
public function update_course($slug, $cat_id)
{
	
		$this->load->helper('url');
	
	
	$data = array(
		'title' => $this->input->post('title'),
		
		'cat_id' => $cat_id,
		
		'study_mode' => $this->input->post('study_mode'),
		
		'description' => $this->input->post('description'),
		
		'who' => $this->input->post('who'),
		
		'entry_requirements' => $this->input->post('entry_requirements'),	
	
		'what_study' => $this->input->post('what_study'),	
	
		'assessed' => $this->input->post('assessed'),	
		
		'where' => $this->input->post('where'),
		
	);
	
	
	
return $this->db->update('courses', $data, array('url' => $slug ));
}
///////////////////////////////////////////////////////////////////////




    public function record_count() {
        return $this->db->count_all("courses");
    }
	
	

    public function fetch_courses($limit, $start, $order) {
		
        $this->db->limit($limit, $start);
		
		
			
	$this->db->order_by($order, "asc");

		
		
	 $query = $this->db->get("courses");
	 


        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
    
   
   ////////////////////////////////////////////////////////////////////////////// Pagination
   

	public function pagination($slug = FALSE)
{
	if ($slug == "all" or $slug === FALSE)
	{
		$query = $this->db->get('catagory');
		return $query->result_array();
	}
	
	$query = $this->db->get_where('catagory', array('crse_type' => $slug));
		$query = $this->db->get("catagory");
	return $query->result_array();
}

   
   ///////////////////////////////////////////////////////////////////////
   
   
      public function fetch_courses_pagination($limit, $start, $order, $type = FALSE) {
		
        $this->db->limit($limit, $start);
		
		
			
	$this->db->order_by($order, "asc");
	
	
	
	
if ($type == "all" or $type === false ) {
$query = $this->db->get("catagory");	
	
} else {
		
		$query = $this->db->get_where('catagory', array('crse_type' => $type));
		
}
	
	 


        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
   
   
   /////////////////////////////////////////////
   
   public function record_count_catagories($type = FALSE) {
	   
	if ($type == "all" or $type === FALSE)
	{
	  return $this->db->count_all("catagory");
	} else {
	 
	
	 	$query = $this->db->get_where('catagory', array('crse_type' => $type));
	//$count = $query->num_rows(); 
	   
	   
        return $query->num_rows(); 
		
	}
    } 
   
   /////////////////////////////////////////////

}

?>