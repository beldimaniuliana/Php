<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_Model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function login($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('user');

        //echo '<pre>'; var_dump(); echo '</pre>';die();

        if( $query->num_rows() === 1 ){
            return TRUE;
        }
        return FALSE;
    }

}
