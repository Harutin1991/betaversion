<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $data['content'] = 'content';
        $this->load->view('template', $data);
    }

    public function sendEmailContact() {
        $this->load->model('contactEmail');
        $insertData = array(
            'fullname' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'message' => $this->input->post('message')
        );
        $result = $this->contactEmail->insertEmail('contact_email', $insertData);
        if ($result['return']) {
            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'ruzanna.xacheryan@gmail.com',
                'smtp_pass' => '!Ruzan@2015'
            );
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from( $this->input->post('email'), $this->input->post('name'));
            $this->email->to('harut.soghomonyan@gmail.com'); 
            $this->email->subject('Email Test');
            $this->email->message($this->input->post('message'));	
            $this->email->send();
            echo $this->email->print_debugger();die;
            
        }
        echo json_encode(array('success' => $result['return']));
    }

    public function saveEmail() {
        $this->load->model('contactEmail');
        $codegen = substr(md5(time() . $this->input->post('email')), 0, 7);
        $insertData = array(
            'email' => $this->input->post('email'),
            'gencode' => $codegen
        );
        $result = $this->contactEmail->insertEmail('user_email', $insertData);
        echo json_encode(array('success' => $result['return'],'gencode'=>  base_url().'share/'.$codegen,'countEmail'=>$result['countEmail']));
    }
    
    public function share($gencode){
        $this->load->model('contactEmail');
        $result = $this->contactEmail->countUserShares($gencode);
        $data['content'] = 'content';
        $this->load->view('template', $data);
    }

}
