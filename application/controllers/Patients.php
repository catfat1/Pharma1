<?php
class Patients extends CI_Controller {
 
    public function __construct()
    { 
        parent::__construct();
        $this->load->model('report_model');
        $this->load->model('reporter_model');
        $this->load->model('patients_model');

        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function create(){

	$data = array(
	'patient_report_id' => $this->input->post('patients_report_id1'),
    
	'patient_name' => $this->input->post('patient_name11'),


    'patient_age' => $this->input->post('patients_age'),

    'patient_weight' => $this->input->post('patients_weight'),

    'patient_sex' => $this->input->post('patients_sex'),


    'patient_country' => $this->input->post('patients_country'),

    'patient_address' => $this->input->post('patients_address'),


    'patient_city' => $this->input->post('patients_city'),

    'patient_telephone' => $this->input->post('patients_tel'),

    'patient_mobile' => $this->input->post('patients_mobile'),

    'patient_mail' => $this->input->post('patients_email'),


    'patient_age_group_id' => $this->input->post('patients_age_group'),

    'patient_pregamcy' => $this->input->post('patients_pregnancy'),

    'patient_status_id' => $this->input->post('patient_status'),

	);



      	$this->patients_model->set_patients($data);

        $data['report']=$this->report_model->get_reports($this->input->post('patients_report_id1'));
        $data['tab'] = 'suspected_drugs';
        $data['position'] = 'complain';
        
	    $this->load->view('home/index',$data);
            
        //}
    }
}
?>


