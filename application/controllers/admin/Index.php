<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('upload');

        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/Admin_Login');
        }
    }

    public function index()
    {
        // $response['title'] = "List";
        // $response['subtitle'] = "vendor";
        // $response['heading'] = $response['title'] . " " . $response['subtitle'];
        $this->load->view('admin/index');
    }

   

}

/* End of file Index.php */
