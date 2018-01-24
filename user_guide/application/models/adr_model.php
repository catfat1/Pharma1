<?php
class adr_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }

	    
    //to insert $data in table  concomitant_drug
    public  function set_adr($data){
        $this->db->insert('adr', $data);
        $insert_id = $this->db->insert_id();
            // return $insert_id;
        }



     public function get_adr($adr_report_id)
    {
     $query = $this->db->select('*')
                       ->from('adr')
                       ->where('adr_report_id',$adr_report_id)
                       ->get();
    return $query->result_array();
    }      

}


?>



