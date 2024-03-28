<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RANE_con  extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Home_model_1'); 
    }

    public function index() {
        $data['service'] = $this->Home_model_1->getHomepageData('service-1');
		$this->load->view('RMC_view/index.php',$data);
    }
}
