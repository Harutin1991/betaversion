<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ContactEmail extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function insertEmail($field,$data) {
        $this->db->select('*');
        $this->db->from($field);
        $this->db->where('email', $data['email']);
        $res  = $this->db->get();
        
        if ($res->num_rows() > 0){
             return array('return'=>true,'countEmail'=>0);
        }else{
            $this->db->insert($field, $data);
            $this->db->select('*');
            $this->db->from($field);
            $res  = $this->db->get();
            $data = $res->result_array();
            return array('return'=>true,'countEmail'=>count($data));
        }
        
    }
    
    
    public function countUserShares($code){
        $this->db->select('*');
        $this->db->from('user_email');
        $this->db->where('gencode', $code);
        $res  = $this->db->get();
        $data = $res->result_array()[0];
        if($res->num_rows() > 0){
            $likeCount = $data['likeCount'] + 1 ;
            $update_data = array('likeCount'=>$likeCount);
            $this->db->where('email', $data['email']);
            $this->db->update('user_email', $update_data);
            return true;
        }else{
            return false;
        }

    }

}
