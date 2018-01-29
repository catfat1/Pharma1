<?php
class admin_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }
    public function get_reports($id=0){
        if($id==0){
            $query = $this->db->get('report');
            return $query->result_array();
        }
        $query = $this->db->get_where('report', array('report_id' => $id));
        return $query->row_array();
    }
    public function get_comments($report_id){
        $query = $this->db->get_where('comment', array('report_comment_id' => $report_id));
        return $query->result_array();
    }
     // Insert New User
     public function set_comment_by_admin(){
        $data = array(
             'comment_desc' => $this->input->post('comment'),
             'report_comment_id' => $this->input->post('report_id'),
             'create_by' => $this->session->userdata('user_id')
         );
         $this->db->insert('comment', $data);
         $insert_id = $this->db->insert_id();
         return $insert_id;
    }
    // get comment by comment Id
    public function get_comment_by_commentId($comment_id){
        $query = $this->db->select('comment_desc')
                          ->get_where('comment', array('comment_id' => $comment_id));
        return $query->row_array();
    }
}
?>