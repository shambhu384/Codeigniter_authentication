<?php

/**
 * 
 * 
 * 
 */
define('GUEST', 0);
define('AUTH_USER', 1);
define('ADMIN', 10);
include_once 'uservo.php';
include_once 'userservices.php';

class Manual_auth extends user_services {

    public function __construct(user $user) {
        parent::__construct($user);
    }

    public function authenticate() {
        $ci = &get_instance();
        $ci->load->model('user_model');
        return $ci->user_model->authenticate($this->user);
    }

    public function create_user() {
        $ci = &get_instance();
        $ci->load->model('user_model');
        $user = $ci->user_model->create($this->user);
        return $user->get_active();
    }

    public function delete_user() {
        
    }

    public function forget_password() {
        
    }

    public function get_token() {
        
    }

    public function request_otp() {
        
    }

    public function update_user() {
        
    }

}
