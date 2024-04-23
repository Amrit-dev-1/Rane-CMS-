<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Land_report_advisory extends CI_Controller {

	
	// public function index()
	// {
	// 	$this->load->view('RMC_view/service8_view.php');
	// }

	public function index()
	{

		$this->load->model('Service_9_model');
		$this->load->model('Navigation_model');
        $data['Head'] = $this->Navigation_model->getHomepageData();

		$data['services'] = $this->Service_9_model->get_all_data();

		$this->load->view('RMC_view/service8_view.php', $data);
	}


}
