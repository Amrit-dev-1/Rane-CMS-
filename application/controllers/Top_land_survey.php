<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Top_land_survey extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Service_1_model'); 
    }

    public function index() {
        $data['services'] = $this->Service_1_model->get_all_data(); 
        $this->load->view('RMC_view/Service1_view', $data); 
    }
}
