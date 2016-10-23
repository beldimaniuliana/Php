<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Auth_Model');
    }

    public function index() {

        $user = $this->session->userdata('user');

        if(isset($user)){
            if($user == 'admin')
                redirect(base_url() . "admin", "refresh");
            else if($user == 'members')
                redirect(base_url() . "member", "refresh");
            else redirect(base_url() . "auth/login", "refresh");
        }
        else redirect(base_url() . "auth/login", "refresh");
    }

    public function login() {
        $data['title'] = "Login"; // $title(login/admin/user)    $lang['login'] = Login/Logheazate

        $this->load->view("auth/login_header", $data);
        $this->load->view("auth/login_index");
        $this->load->view("auth/login_footer");
    }

    public function check_login() {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $check = $this->Auth_Model->login($username, $password);

        if($check > 0) {
            if($this->group($check) == 'admin') {

                $this->session->set_userdata('user', $username);
                redirect(base_url() . "admin", "refresh");
            }
            else if($this->group($check) == 'members') {
                $this->session->set_userdata('user', $username);
                redirect(base_url() . "member", "refresh");
            }
            else redirect(base_url() . "auth/login", "refresh");
        }
        else redirect(base_url() . "auth/login", "refresh");
    }

    public function unset_session_data() {
        $this->session->unset_userdata('user');
        $this->login();
    }

    public function is_admin($id) {
        if($this->Auth_Model->check_group($id) == 'admin'){
            return TRUE;
        }
        return FALSE;
    }

    public function group($id){
        $get_group_name = $this->Auth_Model->check_group($id);

        switch($get_group_name){
            case 'admin' : {
                return 'admin';
                break;
            }

            case 'members': {
                return 'members';
                break;
            }
        }
        return false;
    }
}
