<?php
class Adverse_drug_reaction extends CI_Controller {
 
    public function __construct()
    { 
        parent::__construct();
        $this->load->model('report_model');
        $this->load->model('reporter_model');
        $this->load->model('patients_model');
        $this->load->model('suspect_drug_model');
        $this->load->model('concomitant_drug_model');
        $this->load->model('adr_model');


        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
    }


    public function create(){

	$data = array(

    'adr_report_id' => $this->input->post('adr_report_id'),

    'adr_reaction' => $this->input->post('adr_Reaction'),


   //  '' => $this->input->post('adr_patient_name'),

   'adr_date_start' => $this->input->post('adr_date_start'),

    'adr_date_stop' => $this->input->post('adr_date_end'),

    'adr_reaction_pt' => $this->input->post('adr_Reaction_PT'),

    'adr_reaction_llt' => $this->input->post('adr_Reaction_LLT'),

    'adr_soc' => $this->input->post('adr_SOC'),

    'adr_time_from_drag' => $this->input->post('adr_Time_From_Drug'),

    'adr_comment' => $this->input->post('adr_comment'),

   //  '' => $this->input->post(''),

   //  '' => $this->input->post(''),

   //  '' => $this->input->post(''),

   //  '' => $this->input->post(''),

   //  '' => $this->input->post(''),
    
   //  '' => $this->input->post(''),

   //  '' => $this->input->post(''),

   //  '' => $this->input->post(''),

    // 'create_by'=>$this->input->session_userid
	);

      	$this->adr_model->set_adr($data);
        $data['report']=$this->report_model->get_reports($this->input->post('adr_report_id'));
        $data['tab'] = 'laboratory_test';
        $data['position'] = 'complain';
        
	    $this->load->view('home/index',$data);
            
       
    }

// public function heba()
// {
// echo "heba";
// }



   
}
?>


