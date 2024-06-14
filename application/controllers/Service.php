<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Load common models
        $this->load->model('Navigation_model');
        $this->load->model('Seo_model_1');

        // Define models to load for each method
        $models = [
            'Service_1_model', 'Service_2_model', 'Service_3_model',
            'Service_4_model','Service_5_model', 'Service_6_model', 'Service_7_model',
            'Service_8_model', 'Service_9_model'
        ];

        // Load specified models
        foreach ($models as $model) {
            $this->load->model($model);
        }
    }

    public function Top_land_survey()
    {
        $data['Head'] = $this->Navigation_model->getHomepageData();
        $data['services'] = $this->Service_1_model->get_all_data();
        $data['seo'] = $this->Seo_model_1->get_all_data();
        $this->load->view('RMC_view/service1_view', $data);
    }

    public function Top_land_acquisition_consultants_in_Mumbai()
    {
        $data['Head'] = $this->Navigation_model->getHomepageData();
        $data['services'] = $this->Service_2_model->get_all_data();
        $data['seo'] = $this->Seo_model_1->get_all_data();
        $this->load->view('RMC_view/service2_view', $data);
    }

    public function Land_Record_Village_Map()
    {
        $data['Head'] = $this->Navigation_model->getHomepageData();
        $data['services'] = $this->Service_3_model->get_all_data();
        $data['seo'] = $this->Seo_model_1->get_all_data();
        $this->load->view('RMC_view/service3_view', $data);
    }

    public function Master_planning_in_city_survey()
    {
        $data['Head'] = $this->Navigation_model->getHomepageData();
        $data['services'] = $this->Service_4_model->get_all_data();
        $data['seo'] = $this->Seo_model_1->get_all_data();
        $this->load->view('RMC_view/service4_view', $data);
    }

    public function Construction_Project_management_company()
    {
        $data['Head'] = $this->Navigation_model->getHomepageData();
        $data['services'] = $this->Service_6_model->get_all_data();
        $data['seo'] = $this->Seo_model_1->get_all_data();
        $this->load->view('RMC_view/service5_view', $data);
    }

    public function Environmental_and_crz_Clearance()
    {
        $data['Head'] = $this->Navigation_model->getHomepageData();
        $data['services'] = $this->Service_7_model->get_all_data();
        $data['seo'] = $this->Seo_model_1->get_all_data();
        $this->load->view('RMC_view/service6_view', $data);
    }

    public function Building_plan_approval()
    {
        $data['Head'] = $this->Navigation_model->getHomepageData();
        $data['services'] = $this->Service_8_model->get_all_data();
        $data['seo'] = $this->Seo_model_1->get_all_data();
        $this->load->view('RMC_view/service7_view', $data);
    }

    public function Land_report_advisory()
    {
        $data['Head'] = $this->Navigation_model->getHomepageData();
        $data['services'] = $this->Service_9_model->get_all_data();
        $data['seo'] = $this->Seo_model_1->get_all_data();
        $this->load->view('RMC_view/service8_view', $data);
    }

    public function Geospatial_Land_Surveyor()
    {

        $data['seo'] = $this->Seo_model_1->get_all_data();

        $data['Head'] = $this->Navigation_model->getHomepageData();

        $data['services'] = $this->Service_5_model->get_all_data();

        $this->load->view('RMC_view/service9_view.php', $data);
    }
}
