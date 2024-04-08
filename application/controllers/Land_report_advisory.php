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

		$data['services'] = $this->Service_9_model->get_all_data();

		$this->load->view('RMC_view/service8_view.php', $data);
	}


}
