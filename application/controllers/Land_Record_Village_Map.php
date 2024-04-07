<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Land_Record_Village_Map extends CI_Controller
{


	public function index()
	{

		$this->load->model('Service_3_model');

		$data['services'] = $this->Service_3_model->get_all_data();

		$this->load->view('RMC_view/service3_view.php', $data);
	}
}
