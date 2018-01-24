<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 public function __construct()
 {
   parent::__construct();
   $this->load->model('user_model');
   $this->load->library('session');
   $this->load->helper('form');
   $this->load->library('form_validation');
 
 }
 public function validate()
 { //echo 'yarab'; exit;
   $username = $this->input->post('name');
   $password = $this->input->post('password');
   //echo $username.' -- '.$password; exit;
   //query the database
   $result = $this->user_model->login($username, $password);
   if($result)
   {  //echo 'correct'; exit; 
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'user_id' => $row->user_id,
         'user_name' => $row->user_name,
         'status' => $row->user_status,
         'flag' => '1'
       );
       $this->session->set_userdata($sess_array);
      // print var_dump($sess_array); exit;
     }
     //return TRUE;
     $data['tab'] = 'report';
     $this->load->view('home/index',$data);
   }
   else
   {
    $data['msg']= 'Invalid username or password'; 
    $data['tab'] = 'report';
    $this->load->view('home/index',$data);
   }
 }
}

?>
