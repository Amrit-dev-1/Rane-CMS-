<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Building_plan_approval extends CI_Controller {

	
	// public function index()
	// {
	// 	$this->load->view('RMC_view/service7_view.php');
	// }

	public function index()
	{

		$this->load->model('Service_8_model');
		$this->load->model('Navigation_model');

		$this-> load->model('Seo_model_1');

		$data['seo'] = $this->Seo_model_1->get_all_data(); 

        $data['Head'] = $this->Navigation_model->getHomepageData();

		$data['services'] = $this->Service_8_model->get_all_data();

		$this->load->view('RMC_view/service7_view.php', $data);
	}

}