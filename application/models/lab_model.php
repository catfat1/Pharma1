<?php
class Lab_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }

	    

    //to insert $data in table  concomitant_drug
    public  function set_lab($data){
        $this->db->insert('laboratory',$data);
        $insert_id = $this->db->insert_id();
            // return $insert_id;
        }


    public function get_lab($lab_report_id)
    {
     $query = $this->db->select('*')
                       ->from('laboratory')
                       ->where('lab_report_id',$lab_report_id)
                       ->get();
    return $query->result_array();
    }      

}


?>



