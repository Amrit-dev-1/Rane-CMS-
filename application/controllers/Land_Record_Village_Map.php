<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Land_Record_Village_Map extends CI_Controller
{


	public function index()
	{

		$this->load->model('Service_3_model');
		$this->load->model('Navigation_model');
		$this-> load->model('Seo_model_1');

		$data['seo'] = $this->Seo_model_1->get_all_data(); 
        $data['Head'] = $this->Navigation_model->getHomepageData();

		$data['services'] = $this->Service_3_model->get_all_data();

		$this->load->view('RMC_view/service3_view.php', $data);
	}
}
