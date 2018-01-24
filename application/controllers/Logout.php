<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

    public function __construct()
    {
    parent::__construct();
    $this->load->model('user_model');
    $this->load->library('session');
    $this->load->helper('form');
    $this->load->library('form_validation');
    
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $data['tab'] = 'report';
        $this->load->view('home/index',$data);
    }

}
?>