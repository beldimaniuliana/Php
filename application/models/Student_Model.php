<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_Model extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get_students($id_reg = FALSE) {
        if($id_reg === FALSE) {
            $query = $this->db->get('student');
            return $query->result_array();
        }

        $query = $this->db->get_where('student', array('id_reg' => $id_reg));
        return $query->row_array();
    }

    public function insert_student() {
        $id_reg = $this->input->post('id_reg');

        if($this->Student_Model->check_existing_id_reg($id_reg) == TRUE) {
            $data = array (
                'first_name' => $this->input->post('first_name') ,
                'last_name' => $this->input->post('last_name') ,
                'grade' => $this->input->post('grade') ,
                'details' => $this->input->post('details') ,
                'id_reg' => $id_reg ,
            );

            return $this->db->insert('student', $data);
        }
        else {
            return false;
        }

    }

    public function check_existing_id_reg($id_reg) {
        $query = $this->db->get_where('student', array('id_reg' => $id_reg));
        if($query->row_array() > 0 ) {
            return FALSE;
        }
        return TRUE;
    }
}

