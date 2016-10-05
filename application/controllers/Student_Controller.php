<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Student_Model');
        $this->load->helper('url_helper');
    }

    public function index() {
        $data['students'] = $this->Student_Model->get_students();
        $data['title'] = lang('menu_student');

        $this->load->view('templates/header', $data);
        $this->load->view("templates/menu", $data);
        $this->load->view('student/student', $data);
        $this->load->view('templates/footer', $data);
    }

    public function view($id_reg = NULL) {
        $data['students_item'] = $this->Student_Model->get_students($id_reg);

        if(empty($data['students_item'])) {
            show_404();
        }

        $data['title'] = $data['students_item']['first_name'];
        $this->load->view('templates/header', $data);
        $this->load->view("templates/menu", $data);
        $this->load->view('student/student_details', $data);
        $this->load->view('templates/footer', $data);
    }

    public function insert_student() {
        $data['title'] = "Insert new student";

        $this->form_validation->set_rules('first_name', 'First name', 'required');
        $this->form_validation->set_rules('last_name', 'Last name', 'required');
        $this->form_validation->set_rules('grade', 'Grade', 'required');
        $this->form_validation->set_rules('details', 'Details', 'required');
        $this->form_validation->set_rules('id_reg', 'Registration Id', 'required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view("templates/menu", $data);
            $this->load->view('student/student_create', $data);
            $this->load->view('templates/footer', $data);
        }
        else {
            $this->Student_Model->insert_student();
            $this->index();
        }
    }
}
