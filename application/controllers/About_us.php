<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About_us extends CI_Controller
{
    public function index()
    {
        $this->load->model('About_Us_model_1');
        $this->load->model('About_Us_model_2');
		$this->load->model('Our_client_model');

        $data['services'] = $this->About_Us_model_1->get_all_data();
        $data['services_2'] = $this->About_Us_model_2->get_all_data();
		$data['clients'] = $this->Our_client_model->getHomepageData();

        if (!empty($data['services']) && !empty($data['services_2'])) {
            $this->load->view('RMC_view/about_view', $data);
        } else {
            echo 'No data available.';
        }
    }
}
