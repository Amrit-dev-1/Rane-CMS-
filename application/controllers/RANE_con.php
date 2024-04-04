<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RANE_con extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model_1');
    }

    public function index()
    {
        $this->load->model('Home_model_2');
        $this->load->model('Home_model_3');
        $this->load->model('Our_client_model');
        

        $data['service'] = $this->Home_model_1->getHomepageData();
        $data['service_2'] = $this->Home_model_2->getHomepageData();
        $data['service_3'] = $this->Home_model_3->getHomepageData();
        $data['clients'] = $this->Our_client_model->getHomepageData();

        if (!empty($data['service'])) {
            $this->load->view('RMC_view/index.php', $data);
        } else {
            echo 'No data available.';
        }
    }
}
