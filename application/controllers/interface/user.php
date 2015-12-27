<?php

/**
* User interface
*/

interface user_interface {
    public function create_user();
    public function update_user();
    public function delete_user();
    public function forget_password();
    public function authenticate();
    public function get_token();
    public function request_otp();
}
