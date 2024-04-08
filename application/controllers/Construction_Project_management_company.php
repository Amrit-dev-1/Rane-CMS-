<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Construction_Project_management_company extends CI_Controller {


	public function index()
	{

		$this->load->model('Service_6_model');

		$data['services'] = $this->Service_6_model->get_all_data();

		$this->load->view('RMC_view/service5_view.php', $data);
	}


	

}
