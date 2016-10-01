<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Table_Model extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get_data() {
        $query = $this->db->get('test');
        return $query->result();
    }

    public function insert_data($data) {
        $this->db->insert('test', $data);
    }

    public function delete_data($id) {
        $this->db->delete('test', array("id" => $id));
        return true;
    }

    public function update_data($new_id, $data) {
        $this->db->where('id', $new_id);
        $this->db->update('test', $data);
        return true;
    }

}
