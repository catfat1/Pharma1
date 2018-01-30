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

    // Insert New User
    public function set_user_by_admin(){
        $data = array(
             'user_password' => MD5($this->input->post('User_Password')),
             'user_mail' => $this->input->post('User_Mail'),
             'user_name' => $this->input->post('User_Name'),
             'create_by' => $this->session->userdata('user_id')
         );
         $this->db->insert('user', $data);
         $insert_id = $this->db->insert_id();
         return $insert_id;
    }

    // delete user
    public function delete_user(){
        $data = array( 
            'user_end_date'	=>  date('d/m/y') ,
            'delete_by' => $this->session->userdata('user_id')
        );
        $this->db->where('user_id', $this->input->post('id'));
        $this->db->update('user', $data);
    }

    // edit user
    public function edit_user(){
        $data = array( 
            'user_name'	=>  $this->input->post('User_Name'),
            'user_mail'	=>   $this->input->post('User_Mail'),
            'user_password' => MD5($this->input->post('User_Password')),
            'update_at' => date('d/m/Y h:i:sa'),
            'update_by' => $this->session->userdata('user_id'),
        );
        $this->db->where('user_id', $this->input->post('User_Id'));
        $this->db->update('user', $data);
    }
}
?>
