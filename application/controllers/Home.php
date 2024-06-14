<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model_1');
        $this->load->model('Home_model_2');
        $this->load->model('Home_model_3');
    }

    public function index()
    {
       
        $this->load->model('Our_client_model');
        $this->load->model('Navigation_model');
        $data['Head'] = $this->Navigation_model->getHomepageData();
        

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
