<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_planning_in_city_survey extends CI_Controller {

	
	public function index()
	{

		$this->load->model('Service_4_model');

		$this->load->model('Navigation_model');

		$this-> load->model('Seo_model_1');

		$data['seo'] = $this->Seo_model_1->get_all_data(); 

        $data['Head'] = $this->Navigation_model->getHomepageData();

		$data['services'] = $this->Service_4_model->get_all_data();

		$this->load->view('RMC_view/service4_view.php', $data);
	}
}
