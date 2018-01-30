<?php
class report_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }
    public function set_reports($id = 0)
    {
        
        $data = array(
            'report_desc' => $this->input->post('report_desc'),

            'report_type_id' => $this->input->post('report_type'),

            'report_source' => $this->input->post('report_source'),

            'report_addition_info' => $this->input->post('additional_info'),

            'report_date' => $this->input->post('report_date'),

            'report_status_id' => $this->input->post('report_status'),

            'report_serious' => $this->input->post('seriousness'),


            'report_status_id' => $this->input->post('report_status')


        );
        
        if ($id == 0) {
            $this->db->insert('report', $data);
            $insert_id = $this->db->insert_id();
            return $insert_id;

        } else {
            $this->db->where('report_id', $id);
            return $this->db->update('report', $data);
        }
    }

    public function get_reports($id=0){

        if($id==0){
            $query = $this->db->get('report');
            return $query->result_array();
        }
        $query = $this->db->get_where('report', array('report_id' => $id));
        return $query->row_array();
    }

    public function get_max_id(){
        $query = $this->db->select("max(nvl(id,0)) as id")
                          ->from('report')
                          ->get();
        return $query->row_array();  
    }


//heba code 
 /*to use in show report */   
public function get_report()
{
    $sql=$this->db->get('report');
    return $sql->result_array() ;


//$this->output->enable_profiler(TRUE);
    // rabab
    //  $query = $this->db->select('*')
    //                    ->from('report')
    //                    ->where('report_id',1)
    //                    ->get();
    // return $query->result_array();
}

/*this is show report detail with spesific  id */

public function get_report_with_report_id($report_id)
{
     //$this->load->view('home/show_report_content_using_ajax');
     //$report_id=$this->input->get->('report_id')
     $sql=$this->db->select('*')

                    ->from ('report')
                    ->where('report_id',$report_id)
                    ->get();
    return $sql->result_array();

}

}
?>
