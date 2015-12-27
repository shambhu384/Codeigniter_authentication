<?php

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function create($user) {
        $password = sha1($this->config->item('salt') . $user->get_password());
        $userarray = ['username' => $user->get_username(), 'password' => $password, 'first_name' => $user->get_first_name(), 'last_name' => $user->get_last_name(), 'created_on' => $user->get_created_on()];
        $this->db->insert('users', $userarray);
        if ($this->db->affected_rows() == 1) {
            $user->set_active(1);
        }
        return $user;
    }

    public function authenticate(user $user) {
        $password = sha1($this->config->item('salt') . $user->get_password());

        $row = $this->db->get_where('users', array('username' => $user->get_username()))->row();

        if ($row != null) {
            
            if ($row->password == $password) {

                if ($row->confirm) {
                    $user->set_id($row->id);
                    return 'LOGGEDIN';
                } else {
                    return 'ACCOUNT_INVALID';
                }
            } else {
                return 'PASSWORD_INCORRECT';
            }
        } else {
            return 'USER_NOT_FOUND';
        }
    }

}
