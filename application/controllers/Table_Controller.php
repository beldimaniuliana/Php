<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Table_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->helper(array("form","url"));
        $this->load->model('table_model');
        $this->load->library('form_validation');

    }

    public function index() {
        $data['title'] = lang('menu_table');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        $this->select();
        $this->load->view('templates/footer', $data);
    }

    public function select() {
        $data['records'] = $this->table_model->get_data();
        $this->load->view('table_view', $data);
    }

    public function insert() {

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('desc', 'Description', 'required');

        $this->form_validation->set_message('required', "The %s is required");

        if ($this->form_validation->run() == FALSE)
        {
            $this->index();
        }
        else
        {
            $data = array (
                'name'          => $this->input->post('name') ,
                'description'   => $this->input->post('desc') ,
            );
            $this->table_model->insert_data($data);
            redirect(base_url()."table_controller", 'refresh');
        }
    }

    public function delete($id) {
        $this->table_model->delete_data($id);
        redirect(base_url()."table_controller", 'refresh');
    }

    public function update_view($id) {
        $data['id'] = $id;
        $this->load->view('table_update_view', $data);
    }

    public function update() {
        $this->form_validation->set_rules('ch_name', 'Name', 'required');
        $this->form_validation->set_rules('ch_desc', 'Description', 'required');

        $this->form_validation->set_message('required', "The New %s is required");

        $id = $this->input->post('id');

        if($this->form_validation->run() == TRUE)
        {
            $data = array(
                'name' => $this->input->post('ch_name'),
                'description' => $this->input->post('ch_desc'),
            );

            $this->table_model->update_data($id, $data);
            redirect(base_url() . "table_controller", 'refresh');
        }
        else {
            $this->update_view($id, 'refresh');
        }
    }
}

