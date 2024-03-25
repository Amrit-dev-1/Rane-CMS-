<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Land_advisory_services extends CI_Controller {

	
	public function index()
	{
		$this->load->view('RMC_view/advisory_view.php');
	}
}
