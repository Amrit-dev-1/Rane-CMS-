<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Top_land_survey extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Service_1_model'); 
    }

    public function index() {
        $data['service'] = $this->Service_1_model->db->get('service-1')->result(); // Fetch data from the service-1 table
        $this->load->view('RMC_view/Service1_view', $data); // Pass data to the view
    }
}
