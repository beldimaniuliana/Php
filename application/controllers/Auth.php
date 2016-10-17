<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Auth_Model');
    }

    public function index() {
        //verific daca e logat
            //daca da
                //verific daca e admin
                    //daca da trimit la pag de admin
                //altfel
                //verific daca e user
                    //daca da trimit la pag de user
        //altfel trimit la pag de login
        $user = $this->session->userdata('user');

        var_dump($user);die();
        if(isset($user)){
            redirect(base_url() . "admin", "refresh");
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

        if($this->Auth_Model->login($username, $password)) {
            $this->session->set_userdata('user', $username);
            redirect(base_url() . "admin", "refresh");
        }
        else redirect(base_url()."auth", "refresh");
    }

    public function unset_session_data() {
        $this->session->unset_userdata('user');
        $this->login();
    }
}
