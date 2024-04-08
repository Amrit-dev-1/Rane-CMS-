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

		$data['services'] = $this->Service_8_model->get_all_data();

		$this->load->view('RMC_view/service7_view.php', $data);
	}

}