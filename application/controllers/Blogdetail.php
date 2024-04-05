<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogdetail extends CI_Controller {

    public function index()
    {
        $id = $this->input->get('id');

        $this->load->model('Blog_1_model');

        $data['blog_item'] = $this->Blog_1_model->get_blog_item($id);

        $this->load->view('RMC_view/blogdetail.php', $data);
    }
}
?>
