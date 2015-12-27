<?php

defined('BASEPATH') OR exit('No direct script access allowed');

include_once APPPATH . '/libraries/usermannualauth.php';

class Logincontroller extends CI_Controller {

    public function register() {
        $this->input->post('username');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'username', 'required|trim|min_length[3]');
        $this->form_validation->set_rules('email', 'email', 'required|trim|min_length[3]');
        $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[3]');
        $this->form_validation->set_rules('repassword', 're-password', 'required|trim|min_length[3]|matches[password]');

        if ($this->form_validation->run() == false) {
            $this->load->view('register');
        } else {
            $user = new user();
            $user->set_username($this->input->post('username'));
            $user->set_password($this->input->post('password'));
            $user->set_email($this->input->post('email'));
            $user->set_created_on(time());
            $user->set_last_login(isset($_SERVER['REMOTE_HOST']));
            $user->set_first_name($this->input->post('firstname'));
            $user->set_last_name('lastname');
            $mannualauth = new user_mannual_auth($user);
            $mannualauth->create_user();
            if ($mannualauth->create_user()) {
                echo "User created successfully";
            } else {
                echo "Error:some problem occured in creation";
            }
            echo 'Correct data';
        }
    }

    public function login() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'username', 'required|trim|min_length[3]');
        $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[3]');

        if ($this->form_validation->run() == false) {
            $this->load->view('loginview');
        } else {
            $user = new user();
            $user->set_username($this->input->post('username'));
            $user->set_password($this->input->post('password'));

            $mannualauth = new user_mannual_auth($user);
            if ($return = $mannualauth->authenticate()) {
                switch ($return) {
                    case 'ACCOUNT_INVALID':
                        echo $return;
                        break;
                    case 'PASSWORD_INCORRECT':
                        echo $return;
                        break;
                    case 'USER_NOT_FOUND':
                        echo $return;
                        break;
                    default:
                        $mannualauth->role();
                        $this->session->set_userdata('user',  serialize($user));
                        redirect('home/dashboard');
                        break;
                }
            } else {
                echo "Error:some problem occured in creation";
            }
        }
    }

}
