<?php
class Home extends CI_Controller {

	public function __construct()
    { 
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
    }
	public function main_page()
	{
        $data['tab'] = 'report';
		$this->load->view('home/index',$data);
	}
}
?>