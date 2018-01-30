<?php
class Concomitant_drug_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }

	    
    //to insert $data in table  concomitant_drug
    public  function set_concomitant_drug($data){
        $this->db->insert('concomitant_drug', $data);
        $insert_id = $this->db->insert_id();
            // return $insert_id;
        }



     public function get_concomitant_drug($concomitant_drug_report_id)
    {
  
     $query = $this->db->select('*')
                       ->from('concomitant_drug')
                       ->where('con_report_id',$concomitant_drug_report_id)
                       ->get();
    return $query->result_array();
    }      

}


?>
