<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aboutus extends CI_Controller
{


	public function index()
	{
		$this->load->view('RMC_view/about_view.php');
	}
}
