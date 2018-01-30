<?php
class Concomitant_drug extends CI_Controller {
 
    public function __construct()
    { 
        parent::__construct();
        $this->load->model('report_model');
        $this->load->model('reporter_model');
        $this->load->model('patients_model');
        $this->load->model('suspect_drug_model');
        $this->load->model('concomitant_drug_model');

        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
    }


    public function create(){

	$data = array(

    'con_report_id' => $this->input->post('concomitant_drug_report_id'),

    'con_name' => $this->input->post('concomitant_drug_name'),


    'con_atc_code' => $this->input->post('concomitant_drug_atc_code'),

   'con_suspected_drug_inn' => $this->input->post('concomitant_Suspected_drug_inn'),

    'con_dosage_form_id' => $this->input->post('concomitant_drug_dosage_form'),

    'con_concentrate' => $this->input->post('concomitant_drug_concentration'),

    'con_route_id' => $this->input->post('concomitant_drug_route'),

    'cone_dose' => $this->input->post('concomitant_drug_dose'),

    'con_duration' => $this->input->post('concomitant_drug_duration'),

    'con_drug_class' => $this->input->post('concomitant_drug_drug_class'),

    'con_indiation' => $this->input->post('concomitant_drug_indication'),

    'con_date_start' => $this->input->post('concomitant_drug_date_start'),

    'con_date_stop' => $this->input->post('concomitant_drug_date_end'),

    'con_batch_no' => $this->input->post('concomitant_drug_batch_no'),

    'con_status' => $this->input->post('concomitant_drug_status'),

    // 'create_by'=>$this->input->session_userid
	);

      	$this->concomitant_drug_model->set_concomitant_drug($data);
        $data['report']=$this->report_model->get_reports($this->input->post('concomitant_drug_report_id'));
        $data['tab'] = 'adverse_drug_reaction';
	$data['position'] = 'complain';
	    $this->load->view('home/index',$data);
            
       
    }





   
}
?>


