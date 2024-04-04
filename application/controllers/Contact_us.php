<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_us extends CI_Controller
{
    public function index()
    {
        $this->load->model('Contact_us_model_1');
        $this->load->model('Contact_us_model_2');

        $data['services_1'] = $this->Contact_us_model_1->get_all_data();
        $data['services_2'] = $this->Contact_us_model_2->get_all_data();

        $this->load->view('RMC_view/contact_us_view.php', $data);
    }
}
