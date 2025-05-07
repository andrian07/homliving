<?php

class auth_model extends CI_Model {


    //login
    public function get_login_data($username, $password)
    {
        $query = $this->db->query("select * from user_login where user_name = '".$username."' and user_password = '".$password."' and is_active = 'Y'");
        $result = $query->result();
        return $result;
    }

    public function get_nav_auth($user_role)
    {
        $query = $this->db->query("select * from user_module where user_role = '".$user_role."'");
        $result = $query->result();
        return $result;
    }
    //end login

}

?>