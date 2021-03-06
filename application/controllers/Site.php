<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

    public function __construct() {
        parent:: __construct();
    }

    public function index($page = "home") {
        $this->view($page);
    }
    public function view($page = "home") {
        if(! file_exists(APPPATH.'views/pages/'.$page.'.php')) {
           show_404();
        }

        $data['title'] = ucfirst(lang($page)); //Capitalize the first letter

        $this->load->view("templates/header", $data);
        $this->load->view("templates/menu", $data);
        $this->load->view("pages/".$page, $data);
        $this->load->view("templates/footer", $data);
    }

    public function ajax() {
        $this->load->view('ajax');
    }
}