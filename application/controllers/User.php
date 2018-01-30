<?php
class User extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }
    // Admin Section //
    public function viewAllusers(){
        $data['user_items']=$this->user_model->get_users();
        $this->load->view('admin-header-view', $data);
        $this->load->view('user/viewallusers',$data);
    }
    public function insertUser(){
 
       $id =  $this->user_model->set_user_by_admin();
       $user_item=$this->user_model->get_users($id);
       $encodedArray =  array_map("utf8_encode", $user_item);
       echo json_encode($encodedArray);
    }
    public function editUser(){
       header('Content-Type: text/html; charset=utf-8');
       $this->user_model->edit_user();
       $id=$this->input->post('User_Id');
       $user_item=$this->user_model->get_users($id);
       $encodedArray =  array_map("utf8_encode", $user_item);
       echo json_encode($encodedArray);
    }
    public function deleteUser(){
        $this->user_model->delete_user();
        echo 'done';
    }
    
}
