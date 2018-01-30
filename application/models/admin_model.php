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
    // get all report data
    public function get_report_data($reqId){
        $sql = "SELECT * FROM 
                            report r left join 
                            reporter rr on  r.report_id = rr.reporter_report_id
                            left join patient p on  r.report_id = p.patient_report_id
                            left join concomitant_drug cd on r.report_id = cd.con_report_id
                            left join suspect_drug sd on r.report_id = sd.suspect_drug_report_id
                            left join adr a on  r.report_id = a.adr_report_id
                            left join laboratory l on r.report_id = l.lab_report_id
                where r.report_id = $reqId";
        $result = $this->db->query($sql); 
        return $result->result_array();
    }
    public function get_report_details($id=0){
        $query = $this->db->get_where('report', array('report_id' => $id));
        return $query->row_array();
    }
    public function get_fulldetailscomments($report_id){
        $query = $this->db->select('*')
                         ->from('comment')
                         ->join('user','user.user_id=comment.create_by')
                         ->where('comment.report_comment_id' , $report_id)
                         ->get();
        return $query->result_array();
    }
    public function get_fulldetailreport($report_id){
        $query = $this->db->select('report.* , user.user_name')
                         ->from('report')
                         ->join('user','user.user_id=report.create_by')
                         ->where('report.report_id' , $report_id)
                         ->get();
        return $query->row_array();
    }
    public function get_reporters($report_id){

        $query = $this->db->get_where('reporter', array('reporter_report_id' => $report_id));
        return $query->result_array();
        
    }
    public function get_patients($report_id){

        $query = $this->db->get_where('patient', array('patient_report_id' => $report_id));
        return $query->result_array();
        
    }
    public function get_suspect_drugs($report_id){
        
        $query = $this->db->get_where('suspect_drug', array('suspect_drug_report_id' => $report_id));
        return $query->result_array();
                
    }
    public function get_concomitant_drugs($report_id){
        
        $query = $this->db->get_where('concomitant_drug', array('con_report_id' => $report_id));
        return $query->result_array();
                
    }
    public function get_adrs($report_id){
        
        $query = $this->db->get_where('adr', array('adr_report_id' => $report_id));
        return $query->result_array();
                
    }
    public function get_laboratorys($report_id){
        
        $query = $this->db->get_where('laboratory', array('lab_report_id' => $report_id));
        return $query->result_array();
                
    }
    public function get_reports_count(){
        $query= $this->db->select(' count(*) no')
                         ->from('report')
                         ->get();
        $result = $query->row_array();
        return $result['no'];                 
    }
       

}
?>