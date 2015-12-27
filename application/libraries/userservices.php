<?php

/**
 * 
 */


abstract class user_services implements userinterface {

    protected $user;

    public function __construct(user $user) {
        $this->user = $user;
    }

    public function role() {
        $ci = &get_instance();
        $ci->load->database();
        $row = $ci->db->get_where('role_assignment', array('userid' => $this->user->get_id()));
        $role = $row->row();
        if (GUEST == $role->roleid) {
             $this->user->set_role(GUEST);
        } else if (AUTH_USER == $role->roleid) {
             $this->user->set_role(AUTH_USER);
        } elseif (ADMIN == $role->roleid) {
             $this->user->set_role(ADMIN);
        }
    }

}
