<?php
include APPPATH.'libraries/uservo.php';

defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller{
    
    public function index($params = null) {
        
        
        $this->load->model('user_model');
        
        $data['list']= $this->user_model->get_user($params);
        
        
        $this->load->view('mypage', $data);
    }
    public function dashboard($params = null) {
        //var_dump($this->session);
        $user = unserialize($this->session->userdata('user'));
        echo $user->get_id();
    }
}

//class test {
//    $user = new User();
//
//}


