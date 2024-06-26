<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Geospatial_Land_Surveyor extends CI_Controller {

	
	public function index()
	{

		$this->load->model('Service_5_model');
		$this->load->model('Navigation_model');

		$this-> load->model('Seo_model_1');

		$data['seo'] = $this->Seo_model_1->get_all_data(); 

        $data['Head'] = $this->Navigation_model->getHomepageData();

		$data['services'] = $this->Service_5_model->get_all_data();

		$this->load->view('RMC_view/service9_view.php', $data);
	}

	
}
