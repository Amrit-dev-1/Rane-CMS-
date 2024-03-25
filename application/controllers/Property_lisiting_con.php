<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Property_lisiting_con extends CI_Controller {

	
	public function index()
	{
		$this->load->view('RMC_view/prop_view.php');
	}
}
