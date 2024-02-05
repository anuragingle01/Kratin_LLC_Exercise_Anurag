<?php

class Medication_model extends CI_Model {

    public function __construct() {
        parent::__construct();

        // Load the database library
        $this->load->database();
    }

    public function add_medication($data) {
        // Use $this->db instead of $this->load->database()
        return $this->db->insert('medications', $data);
    }

    public function get_medications() {
        // Use $this->db instead of $this->load->database()
        return $this->db->get('medications')->result();
    }
}
