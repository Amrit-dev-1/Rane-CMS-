<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Top_land_acquisition_consultants_in_Mumbai extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Service_2_model'); 
    }

	
	public function index(){

		$data['services'] = $this->Service_2_model->get_all_data(); 

		$this->load->view('RMC_view/service2_view.php',$data);
	}
}
