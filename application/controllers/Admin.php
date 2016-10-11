<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index(){
        //verific daca e admin
            //daca da e ok
            //altfel redirect la login

        $this->page("admin_index");
    }

    public function page($page = "") {
        //var_dump($page);die();

        if(! file_exists(APPPATH.'views/admin/template/'.$page.'.php')) {
            show_404();
        }

        $data['title'] = $page;

        $this->load->view("admin/template/admin_header", $data);
        $this->load->view("admin/template/".$page);
        $this->load->view("admin/template/admin_footer");
    }
}