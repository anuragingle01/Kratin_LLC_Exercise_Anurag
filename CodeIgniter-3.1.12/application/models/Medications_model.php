<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medications_model extends CI_Model {
    

    public function save_medication($data) {
        $this->db->insert('medications', $data);
        return $this->db->insert_id();
    }
}
