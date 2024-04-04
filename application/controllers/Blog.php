<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function index()
    {
        // Load the Blog_1_model
        $this->load->model('Blog_1_model');

        // Call the get_all_data method from the model to retrieve data
        $data['service'] = $this->Blog_1_model->get_all_data();

        // Load the view 'blog_view.php' and pass the data to it
        $this->load->view('RMC_view/blog_view', $data);
    }
}
