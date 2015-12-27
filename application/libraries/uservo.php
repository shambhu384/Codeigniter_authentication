<?php

/**
 * Value object
 */
class user {

    private $id;
    private $ip_address;
    private $username;
    private $password;
    private $salt;
    private $email;
    private $activation_code;
    private $forgotten_password_code;
    private $forgotten_password_time;
    private $remember_code;
    private $onetimepassword;
    private $created_on;
    private $last_login;
    private $active;
    private $first_name;
    private $last_name;
    private $company;
    private $phone;
    private $is_login;
    private $role;

    public function get_id() {
        return $this->id;
    }

    public function get_role() {
        return $this->role;
    }

    public function get_ip_address() {
        return $this->ip_address;
    }

    public function get_username() {
        return $this->username;
    }

    public function get_password() {
        return $this->password;
    }

    public function get_salt() {
        return $this->salt;
    }

    public function get_email() {
        return $this->email;
    }

    public function get_activation_code() {
        return $this->activation_code;
    }

    public function get_forgotten_password_code() {
        return $this->forgotten_password_code;
    }

    public function get_forgotten_password_time() {
        return $this->forgotten_password_time;
    }

    public function get_remember_code() {
        return $this->remember_code;
    }

    public function get_onetimepassword() {
        return $this->onetimepassword;
    }

    public function get_created_on() {
        return $this->created_on;
    }

    public function get_last_login() {
        return $this->last_login;
    }

    public function get_active() {
        return $this->active;
    }

    public function get_first_name() {
        return $this->first_name;
    }

    public function get_last_name() {
        return $this->last_name;
    }

    public function get_company() {
        return $this->company;
    }

    public function get_phone() {
        return $this->phone;
    }

    public function is_login() {
        return $this->is_login;
    }

    public function set_id($id) {
        $this->id = $id;
    }

    public function set_ip_address($ip_address) {
        $this->ip_address = $ip_address;
    }

    public function set_username($username) {
        $this->username = $username;
    }

    public function set_password($password) {
        $this->password = $password;
    }

    public function set_salt($salt) {
        $this->salt = $salt;
    }

    public function set_email($email) {
        $this->email = $email;
    }

    public function set_activation_code($activation_code) {
        $this->activation_code = $activation_code;
    }

    public function set_forgotten_password_code($forgotten_password_code) {
        $this->forgotten_password_code = $forgotten_password_code;
    }

    public function set_forgotten_password_time($forgotten_password_time) {
        $this->forgotten_password_time = $forgotten_password_time;
    }

    public function set_remember_code($remember_code) {
        $this->remember_code = $remember_code;
    }

    public function set_onetimepassword($onetimepassword) {
        $this->onetimepassword = $onetimepassword;
    }

    public function set_created_on($created_on) {
        $this->created_on = $created_on;
    }

    public function set_last_login($last_login) {
        $this->last_login = $last_login;
    }

    public function set_active($active) {
        $this->active = $active;
    }

    public function set_first_name($first_name) {
        $this->first_name = $first_name;
    }

    public function set_last_name($last_name) {
        $this->last_name = $last_name;
    }

    public function set_company($company) {
        $this->company = $company;
    }

    public function set_phone($phone) {
        $this->phone = $phone;
    }

    public function set_is_login($is_login) {
        $this->is_login = $is_login;
    }

    public function set_role($role) {
        $this->role = $role;
    }

}
