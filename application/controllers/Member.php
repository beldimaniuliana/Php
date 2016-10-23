<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index(){
        //verific daca e admin
        //daca da e ok
        //altfel redirect la login

        $this->page("member_index");
    }

    public function page($page = "") {
        //var_dump($page);die();

        if(! file_exists(APPPATH.'views/member/'.$page.'.php')) {
            show_404();
        }

        $data['title'] = $page;

        $this->load->view("member/template/member_header", $data);
        $this->load->view("member/".$page);
        $this->load->view("member/template/member_footer");
    }
}