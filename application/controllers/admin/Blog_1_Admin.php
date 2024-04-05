<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog_1_Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Blog_1_model');

        $this->load->library('session');
    
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/Admin_Login');
        }
    }

    public function display_data()
    {
        $data['services'] = $this->Blog_1_model->get_all_data();
        $this->load->view('admin/Blog_view_1/view.php', $data);
    }



    public function add()
    {
        if ($this->input->post()) {
            $this->load->library('upload');
            $config['upload_path'] = './uploads/blog_images/';
            $config['allowed_types'] = '*';
            $config['max_size'] = 1024 * 10;
            $config['overwrite'] = false;
            $this->upload->initialize($config);

            if ($this->upload->do_upload('Blog_Img')) {
                $upload_data = $this->upload->data();
                $data = array(
                    'Blog_title' => $this->input->post('Blog_title'),
                    'Blog_main_content' => $this->input->post('Blog_main_content'),
                    'Blog_detail_content' => $this->input->post('Blog_detail_content'),

                    'Blog_Img' => $upload_data['file_name']
                );

                $result = $this->Blog_1_model->add($data);

                if ($result) {
                    $this->session->set_flashdata('success', 'Data inserted successfully.');
                } else {
                    $this->session->set_flashdata('error', 'Error occurred while inserting data.');
                }
            } else {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
            }

            redirect('admin/Blog_1_Admin/display_data');
        } else {
            $this->load->view('admin/Blog_view_1/add.php');
        }
    }





    public function edit($id = null)
    {
        if ($this->input->post()) {
            $id = $this->input->post('id');

            $data = array(


                'Blog_title' => $this->input->post('Blog_title'),
                'Blog_main_content' => $this->input->post('Blog_main_content'),
                'Blog_detail_content' => $this->input->post('Blog_detail_content'),
            );

            if ($_FILES['Blog_Img']['name']) {
                $upload_path = 'uploads/blog_images/';
                $config['upload_path'] = $upload_path;
                $config['allowed_types'] = '*';
                $config['max_size'] = 1024 * 10;
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('Blog_Img')) {
                    $upload_data = $this->upload->data();
                    $data['Blog_Img'] = $upload_data['file_name'];
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('admin/Blog_1_Admin/edit/' . $id);
                }
            }

            // echo '<pre>';
            // print_r($data);
            // exit;

            $result = $this->Blog_1_model->edit($id, $data);

            if ($result) {
                $this->session->set_flashdata('success', 'Blog updated successfully.');
            } else {
                $this->session->set_flashdata('error', 'Error occurred while updating blog.');
            }

            redirect('admin/Blog_1_Admin/display_data');
        } else {
            $data['service'] = $this->Blog_1_model->get_service_by_id($id);
            $this->load->view('admin/Blog_view_1/edit.php', $data);
        }
    }





    public function delete($id = null)
    {
        if ($id === null) {
            $this->session->set_flashdata('error', 'Invalid ID.');
            redirect('admin/Blog_1_Admin/display_data');
        }

        $result = $this->Blog_1_model->delete($id);

        if ($result) {
            $this->session->set_flashdata('success', 'Data deleted successfully.');
        } else {
            $this->session->set_flashdata('error', 'Error occurred while deleting data.');
        }

        redirect('admin/Blog_1_Admin/display_data');
    }
}


    
                    // echo "<pre>";
                    // print_r($_FILES);
                    // exit;