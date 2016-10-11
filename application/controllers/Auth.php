<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();
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
        $this->login();
    }

    public function login() {
        $data['title'] = "Login"; // $title(login/admin/user)    $lang['login'] = Login/Logheazate

        $this->load->view("auth/login_header", $data);
        $this->load->view("auth/login_index");
        $this->load->view("auth/login_footer");
    }

    public function check_login() {
        redirect(base_url()."admin", "refresh");
    }
}
