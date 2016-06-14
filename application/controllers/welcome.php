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

        if ($result['return']) {
            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'smtp_email',
                'smtp_pass' => 'smtp_password'
            );
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from($this->input->post('email'), $this->input->post('name'));
            $this->email->to('contact@exxosoftware.com');
            $this->email->subject('Follow to beta version');
            $this->email->message($this->input->post('message'));
            $send_result = $this->email->send();
            if ($send_result) {
                $insertData = array(
                    'fullname' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'message' => $this->input->post('message')
                );
                $result = $this->contactEmail->insertEmail('contact_email', $insertData);
                echo json_encode(array('success' => $result['return']));
                exit();
            } else {
                echo json_encode(array('success' => false));
                exit();
            }
        }
    }

    public function saveEmail() {
        $this->load->model('contactEmail');
        if ($this->input->post('email') != "") {
            $codegen = substr(md5(time() . $this->input->post('email')), 0, 7);
            $friend_code = $this->input->post('friend_code');
            $insertData = array(
                'email' => $this->input->post('email'),
                'gencode' => $codegen
            );
            $result = $this->contactEmail->insertEmail('user_email', $insertData,$friend_code);
            if($result['return']){
                echo json_encode(array('success' => $result['return'], 'gencode' => base_url() . 'share/' . $codegen, 'countEmail' => $result['countEmail']));exit();
            }else{
                echo json_encode(array('success' => $result['return']));exit();
            }
            
        } else {
            echo json_encode(array('success' => false));exit();
        }
    }

    public function share($gencode) {
        $this->load->model('contactEmail');
        $data['content'] = 'content';
        $this->load->view('template', $data);
    }

}
