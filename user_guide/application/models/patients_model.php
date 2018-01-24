<?php
class Patients_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }

	function set_patients($data){
	$this->db->insert('patient', $data);
 	$insert_id = $this->db->insert_id();
      // return $insert_id;
	}



  	  
	public function get_patients($id=0){
        if($id==0){
            $query = $this->db->get('patient');
            return $query->result_array();
        }
        $query = $this->db->get_where('patient', array('patient_id' => $id));
        return $query->row_array();
        
    	}     


     public function get_patient($report_patient_id)
    {
  
     $query = $this->db->select('*')
                       ->from(' patient')
                       ->where('patient_report_id',$report_patient_id)
                       ->get();
    return $query->result_array();
    }      

}


?>



