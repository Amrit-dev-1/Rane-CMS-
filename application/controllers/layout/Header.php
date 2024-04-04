<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Header extends CI_Controller
{
    public function index()
    {
        $this->load->model('Navigation_model');
        
        // Fetch data from model


		$data['Banner'] = $this->Navigation_model->getHomepageData();
   
	


        $this->load->view('admin/Contactus_admin_view/view.php', $data);

        // $this->load->view('RMC_view/layout/header_view.php', $data);
    }
}
