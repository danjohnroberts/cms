<?php
Class User extends CI_Model
{
    function login($username, $password)
    {
        $this->db->select('id, username, password');
        $this->db->from('users');
        $this->db->where('username = ' . "'" . $username . "'");
        $this->db->where('password = ' . "'" . MD5($password) . "'");
        $this->db->limit(1);
        
        $query = $this->db->get();
        
        if ($query->num_rows() == 1) {
            return $query->result();
        } //$query->num_rows() == 1
        else {
            return false;
        }
    }
    
    
    ///////////////////////////////////////
    
    function login2($username, $password)
    {
        $query = $this->db->get_where('users', array(
            
            'username' => $username,
            
            'password' => MD5($password)
        ));
        
        return $query->row_array();
    }
    
    //////////////////////////////////////////
    
    function update_user($username, $password)
    {
        
        $data = array(
            
            
            'password' => MD5($password),
            
            'profile' => $password
            
            
        );
        
        $this->db->where('username', $username);
        
        $this->db->update('users', $data);
        
    }
    
    
    
    //////////////////////////////////////////////////////////////////////////////////////////////// 
    
    public function insert_user()
    {
        $this->load->helper('url');
        
        $password = MD5($this->input->post('password'));
        
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $password
            
        );
        
        return $this->db->insert('users', $data);
    }
    
    //////////////////////////////////////////////////////////////////////////////////////////////// 
    
}
?>