<?php
class Suspect_drug_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }

	    

    public  function set_suspect_drugs($data){
      $this->db->insert('suspect_drug', $data);
      $insert_id = $this->db->insert_id();
          // return $insert_id;
      }


    public function get_suspect_drug($suspect_drug_report_id)
    {
  
     $query = $this->db->select('*')
                       ->from('suspect_drug')
                       ->where('suspect_drug_report_id',$suspect_drug_report_id)
                       ->get();
    return $query->result_array();
    }      

}


?>



