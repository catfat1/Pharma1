<?php
class User_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }
    function login($username, $password)
    {
       $this->db->select('*');
       $this->db->from('user');
       $this->db->where('user_name', $username);
       $this->db->where('user_password', MD5($password));
       $this->db->limit(1);
       $query = $this->db->get();
       if($query->num_rows() == 1)
       {
         return $query->result();
       }
       else
       {
         return false;
       }
    }
    // Admin Section ////
    public function get_users($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->where('user_end_date',null);
            $query = $this->db->get('user');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('user', array('user_id' => $id ));
        return $query->row_array();
        
    }
}
?>