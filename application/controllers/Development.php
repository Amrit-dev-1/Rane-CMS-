<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Development extends CI_Controller {

	
	public function index()
	{
		$this->load->view('RMC_view/blog1_view.php');
	}
}
