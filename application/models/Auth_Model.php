<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_Model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function login($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('users');

        //echo '<pre>'; var_dump(); echo '</pre>';die();

        if( $query->num_rows() === 1 ){
            return $query->row()->id;
        }
        return 0;
    }

    public function check_group($user_id) {
        $query = $this->db->get_where('users_groups', array('user_id' => $user_id));

        if($query->num_rows() == 1) {
            $group_id = $query->row()->group_id;
            $query1 = $this->db->get_where('groups', array('id' => $group_id));
            return $query1->row()->name;
        }
        return false;
    }
}
