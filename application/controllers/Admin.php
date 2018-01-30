<?php
class Admin extends CI_Controller {
 
	public function __construct()
	{ 
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->helper('url_helper');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
    }
    public function index(){
        $data['reports'] = $this->admin_model->get_reports();
        $data['reports_count'] = $this->admin_model->get_reports_count();
        $this->load->view('admin-header-view',$data);
        $this->load->view('AdminReports/index',$data);
    }
    public function listComments(){
        $report_id = $this->input->post('report_id');
        $comments = $this->admin_model->get_comments($report_id);
       // $encodedArray =  array_map("utf8_encode", $comments);
        echo json_encode($comments);
    }
    public function insertComment(){
       // echo $this->input->post('report_id'); 
        $id =  $this->admin_model->set_comment_by_admin();
       // echo $id; exit;
        $comment=$this->admin_model->get_comment_by_commentId($id);
        $encodedArray =  array_map("utf8_encode", $comment);
        echo json_encode($encodedArray);
     }
     public function reportDetails($report_id){
         //echo 'yarabFar7a';
       //  $data['details']=$this->admin_model->get_report_data($report_id);
         $data['report']=$this->admin_model->get_fulldetailreport($report_id);
       //  
         $data['reporters']=$this->admin_model->get_reporters($report_id);
         $data['patients']=$this->admin_model->get_patients($report_id);
         //var_dump($data['patients']); exit;
         $data['s_drugs']=$this->admin_model->get_suspect_drugs($report_id);
         $data['comments'] = $this->admin_model->get_fulldetailscomments($report_id);
         $data['concomitant_drugs'] = $this->admin_model->get_concomitant_drugs($report_id);
         $data['adrs'] = $this->admin_model->get_adrs($report_id);
         $data['labs'] = $this->admin_model->get_laboratorys($report_id);
         $this->load->view('AdminReports/reportDetails',$data);
     }
    
}