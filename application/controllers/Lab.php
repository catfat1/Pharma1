<?php
class Lab extends CI_Controller {
 
    public function __construct()
    { 
        parent::__construct();
        $this->load->model('report_model');
        $this->load->model('reporter_model');
        $this->load->model('patients_model');
        $this->load->model('suspect_drug_model');
        $this->load->model('concomitant_drug_model');
        $this->load->model('adr_model');
        $this->load->model('lab_model');

        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
    }


    public function create(){

	$data = array(

    'lab_report_id' => $this->input->post('lab_report_id'),

    'lab_name' => $this->input->post('lab_report_name'),


    'lab_medra' => $this->input->post('medra'),

    'lab_reference_range' => $this->input->post('refrence_range'),

    'lab_result' => $this->input->post('test_result'),

    'lab_result_action_id' => $this->input->post('lab_test_result_action'),

    'lab_date' => $this->input->post('lab_test_date'),

    'lab_status_id' => $this->input->post('lab_status'),

   

    // 'create_by'=>$this->input->session_userid
	);

      	$this->lab_model->set_lab($data);
        $data['report']=$this->report_model->get_reports($this->input->post('lab_report_id'));
        $data['tab'] = 'laboratory_test';
	    $this->load->view('home/index',$data);
            
       
    }

// public function heba()
// {
// echo "heba";
// }



   
}
?>


