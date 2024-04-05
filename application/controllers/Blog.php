<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function index()
    {
        $this->load->model('Blog_1_model');

        $data['service'] = $this->Blog_1_model->get_all_data();

        $this->load->view('RMC_view/blog_view', $data);
    }
}
