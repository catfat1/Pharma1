<?php
class Reporter extends CI_Controller {
 
    public function __construct()
    { 
        parent::__construct();
        $this->load->model('report_model');
        $this->load->model('reporter_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function create(){
        $reporter_report_id = $this->input->post('xx');
        $reporter_id=$this->reporter_model->set_reporters($reporter_report_id);
        $data['reporter']= $this->reporter_model->get_reporters($reporter_id);
        $data['report']=$this->report_model->get_reports($reporter_report_id);
        $data['tab'] = 'patients';
        $data['position'] = 'complain';
        
        $this->load->view('home/index',$data);
    }
}
?>
