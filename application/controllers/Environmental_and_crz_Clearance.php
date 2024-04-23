<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Environmental_and_crz_Clearance extends CI_Controller {

	
	// public function index()
	// {
	// 	$this->load->view('RMC_view/service6_view.php');
	// }

	public function index()
	{

		$this->load->model('Service_7_model');
		$this->load->model('Navigation_model');
        $data['Head'] = $this->Navigation_model->getHomepageData();

		$data['services'] = $this->Service_7_model->get_all_data();

		$this->load->view('RMC_view/service6_view.php', $data);
	}

}
