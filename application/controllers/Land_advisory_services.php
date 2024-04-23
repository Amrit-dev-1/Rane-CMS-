<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Land_advisory_services extends CI_Controller {

	
	public function index()
	{
        $this->load->model('Land_Advisory_model_1');
        $this->load->model('Land_Advisory_model_2');

		$this->load->model('Navigation_model');
        $data['Head'] = $this->Navigation_model->getHomepageData();

		$data['key_points'] = $this->Land_Advisory_model_1->get_all_data();
		$data['Case'] = $this->Land_Advisory_model_2->get_all_data();


		$this->load->view('RMC_view/advisory_view.php',$data);
	}
}
