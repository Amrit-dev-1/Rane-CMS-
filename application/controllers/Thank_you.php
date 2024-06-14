<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thank_you extends CI_Controller {

	
	public function index()
	{
        
        $this->load->model('Navigation_model');

        $data['Head'] = $this->Navigation_model->getHomepageData();
        
		$this->load->view('RMC_view/Thankyou_view.php', $data);
	}
}
