<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RANE_con extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model_1');
        $this->load->model('Home_model_2');
    }

    public function index()
    {
        $data['service'] = $this->Home_model_1->getHomepageData();
        $data['Banner'] = $this->Home_model_2->getHomepageData();

        if (!empty($data['service']) && !empty($data['Banner'])) {
            $this->load->view('RMC_view/index.php', $data);
        } else {
            echo 'No data available.';
        }
    }
}
?>
