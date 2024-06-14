<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Client_con extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Our_client_model');
    }

    public function index()
    {
        $data['clients'] = $this->Our_client_model->getHomepageData();
        // echo "<pre>";
        // print_r($data);
        // exit;
        $this->load->view('RMC_view/client_view.php', $data);
    }
}
?>
