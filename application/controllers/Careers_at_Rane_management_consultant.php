<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Careers_at_Rane_management_consultant extends CI_Controller {

    public function __construct() {
        parent:: __construct();
         $this->load->helper('url');
         
    }

    public function index() {
        $this->load->view('RMC_view/careers_view.php');
    }
 
        function send() {
            $this->load->config('email');
            $this->load->library('email');
            
            $from = $this->config->item('webdeveloper1.crezvatic@gmail.com ');
            $to = $this->input->post('to');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');
    
            $this->email->set_newline("\r\n");
            $this->email->from($to);
            $this->email->to($to);
            $this->email->subject($subject);
            $this->email->message($message);
    
            if ($this->email->send()) {
                echo 'Your Email has successfully been sent.';
            } else {
                show_error($this->email->print_debugger());
            }
        }
    }

  