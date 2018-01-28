<?php
class Reporter_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }
    public function set_reporters($report_id){
        $data = array(
            'reporter_report_id ' =>$report_id,

            'reporter_name' =>$this->input->post('reporter_name'),

            'reporter_qualification_id' =>$this->input->post('qualification'),

            'reporter_work_institution_id' =>$this->input->post('work_institution'),

            'reporter_speciality' =>$this->input->post('reporters_speciality'),

            'reporter_address' =>$this->input->post('reporters_adress'),

            'reporter_telephone' =>$this->input->post('reporters_tel_no'),

            'reporter_mobile_no' =>$this->input->post('reporters_mob_no'),

            'reporter_mail' =>$this->input->post('reporter_Email'),

            'reporter_contact_detail' =>$this->input->post('reporters_Contact'),


           'reporter_status_id' =>$this->input->post('Status'),


            'reporter_medicaly_confirm' =>$this->input->post('reporters_medicaly_confirmed'),


        );
        $this->db->insert('reporter', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;


    }
    public function get_reporters($id=0){
        
        if($id==0){
            $query = $this->db->get('reporter');
            return $query->result_array();
        }
        $query = $this->db->get_where('reporter', array('reporter_id' => $id));
        return $query->row_array();
        
    }    












    public function get_reporter($report_reporter_id)
{
    // $sql=$this->db->get('reporter');
    // return $sql->result_array() ;


    
     $query = $this->db->select('*')
                       ->from('reporter')
                       ->where('reporter_report_id',$report_reporter_id)
                       ->get();
    return $query->result_array();
}    
}
?>