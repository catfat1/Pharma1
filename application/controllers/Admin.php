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
        $this->load->view('admin-header-view');
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
    
}