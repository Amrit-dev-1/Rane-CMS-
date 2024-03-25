<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client_con extends CI_Controller {

	
	public function index()
	{
		$this->load->view('RMC_view/client_view.php');
	}
}
