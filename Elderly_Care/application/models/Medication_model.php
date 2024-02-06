<?php

class Medication_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function add_medication($data) {
        return $this->db->insert('medications', $data);
    }

    public function get_medications() {
        return $this->db->get('medications')->result();
    }
}
