<?php
class Suspect_drug extends CI_Controller {
 
    public function __construct()
    { 
        parent::__construct();
        $this->load->model('report_model');
        $this->load->model('reporter_model');
        $this->load->model('patients_model');
        $this->load->model('suspect_drug_model');


        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
    }


    public function create(){

	$data = array(
	'suspect_drug_report_id' => $this->input->post('suspect_drug_report_id1'),

    'suspect_drug_name' => $this->input->post('suspected_drug_name'),

    'suspect_drug_atc_code' => $this->input->post('suspected_drug_atc_code'),

    'suspect_drug_active_ingredient' => $this->input->post('suspected_drug_active_ingredient'),

    'suspect_drug_suspeted_drag_inn' => $this->input->post('suspected_drug_inn'),

    'suspect_drug_concentration' => $this->input->post('suspected_drug_concentration'),

    'suspect_drug_route_id' => $this->input->post('suspected_drug_route'),

    'suspect_drug_dosage_form_id' => $this->input->post('suspected_drug_dosage_form'),

    'suspect_drug_dose' => $this->input->post('suspected_drug_dose'),

    'suspect_drug_duration' => $this->input->post('suspected_drug_duration'),

    'suspect_drug_class_id' => $this->input->post('suspected_drug_drug_class'),

    'suspect_drug_indication' => $this->input->post('suspected_drug_indication'),

    'suspect_drug_date_start' => $this->input->post('suspected_drug_date_start'),

    'suspect_drug_date_stop' => $this->input->post('suspected_drug_date_end'),

    'suspect_drug_batch_no' => $this->input->post('suspected_drug_batch_no'),

    'suspect_drug_status_id' => $this->input->post('suspected_drug_status'),

	);




      	$this->suspect_drug_model->set_suspect_drugs($data);
        $data['report']=$this->report_model->get_reports($this->input->post('suspect_drug_report_id1'));
        $data['tab'] = 'concomitant_drug';
        $data['position'] = 'complain';
        
	    $this->load->view('home/index',$data);
            
       
    }



   
}
?>


