<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ContactEmailModel extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function insertEmail($field,$data) {
        $this->db->select('*');
        $this->db->from($field);
        $this->db->where('short_name', $data['email']);
        $this->db->where('full_name', $full_name);
        $res  = $this->db->get();
        $data = $res->result_array();
        $this->db->insert($field, $data);
    }

}
