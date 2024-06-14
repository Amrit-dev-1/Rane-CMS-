<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Header extends CI_Controller
{
    public function index()
    {
        $this->load->model('Navigation_model');

		$data['Banner'] = $this->Navigation_model->getHomepageData();

        // echo "<pre>";
        // print_r($data);
        // exit;


        $this->load->view('RMC_view/layout/header_view', $data);

    }
}
