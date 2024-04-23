<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Property_lisiting_con extends CI_Controller {

	
	public function index()
	{

		$this->load->model('Navigation_model');
        $data['Head'] = $this->Navigation_model->getHomepageData();
		$this->load->view('RMC_view/prop_view.php',$data);
	}
}
