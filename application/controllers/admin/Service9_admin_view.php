<?php
defined('BASEPATH') or exit('No direct script access allowed');

class service9_admin_view extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Service_9_model');
        $this->load->library('session');
        
        // Check if admin is not logged in, redirect to login page
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/Admin_Login');
        }
    }

    public function display_data()
    {
        $data['services'] = $this->Service_9_model->get_all_data();

        //var_dump($data);exit;

        // $this->load->view('admin/Service_9_section/view', $data);
        $this->load->view('admin/Service_9_section/view', $data);
    }



    public function add()
    {
        if ($this->input->post()) {
            $config['upload_path'] = './uploads/Main-img/';
            $config['allowed_types'] = '*';
            $config['max_size'] = 1024 * 10;
            $config['overwrite'] = 1;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('main_img')) {
                $main_img_data = $this->upload->data();
                $main_img_name = $main_img_data['file_name'];

                $client_images = array();
                for ($i = 1; $i <= 4; $i++) {
                    if ($_FILES['client_image_' . $i]['name']) {
                        $config['upload_path'] = './uploads/Logo/';
                        $this->upload->initialize($config);

                        if ($this->upload->do_upload('client_image_' . $i)) {
                            $client_img_data = $this->upload->data();
                            $client_images['client_image_' . $i] = $client_img_data['file_name'];
                        } else {
                            $client_images['client_image_' . $i] = '';
                        }
                    }
                }

                $data = array(
                    'main_img' => $main_img_name,
                    'title' => $this->input->post('title'),
                    'content' => $this->input->post('content'),
                    'client_des_1' => $this->input->post('client_des_1'),
                    'client_des_2' => $this->input->post('client_des_2'),
                    'client_des_3' => $this->input->post('client_des_3'),
                    'client_des_4' => $this->input->post('client_des_4'),
                    'key_feature_1' => $this->input->post('key_feature_1'),
                    'key_feature_2' => $this->input->post('key_feature_2')
                );

                $data = array_merge($data, $client_images);

                $result = $this->Service_9_model->add($data);

                if ($result) {
                    $this->session->set_flashdata('success', 'Data inserted successfully.');
                } else {
                    $this->session->set_flashdata('error', 'Error occurred while inserting data.');
                }
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
            }

            redirect('admin/Service9_admin_view/display_data');
        } else {
            $this->load->view('admin/Service_9_section/add');
        }
    }




    public function edit($id = null)
    {
        if ($this->input->post()) {
            $id = $this->input->post('id');
    
            $this->load->library('upload');
    
            // Handle main image upload
            if (!empty($_FILES['main-img']['name'])) {
                $config['upload_path'] = './uploads/Main-img/';
                $config['allowed_types'] = '*';
                $config['max_size'] = 1024 * 10;
                $config['overwrite'] = true;
                $this->upload->initialize($config);
                if ($this->upload->do_upload('main-img')) {
                    $main_img_data = $this->upload->data();
                    $main_img = $main_img_data['file_name']; 
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('admin/Service9_admin_view/edit/' . $id);
                }
            }
    
            // Handle client images upload
            $client_images = array();
            for ($i = 1; $i <= 4; $i++) {
                if (!empty($_FILES['client_image_' . $i]['name'])) {
                    $config['upload_path'] = './uploads/Logo/';
                    $config['allowed_types'] = '*';
                    $config['max_size'] = 1024 * 10;
                    $config['overwrite'] = true;
                    $this->upload->initialize($config);
    
                    if ($this->upload->do_upload('client_image_' . $i)) {
                        $client_img_data = $this->upload->data();
                        $client_images[$i] = $client_img_data['file_name'];
                    } else {
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        redirect('admin/Service9_admin_view/edit/' . $id);
                    }
                }
            }
    
            // Prepare data for update
            $data = array(
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content'),
                'client_des_1' => $this->input->post('client_des_1'),
                'client_des_2' => $this->input->post('client_des_2'),
                'client_des_3' => $this->input->post('client_des_3'),
                'client_des_4' => $this->input->post('client_des_4'),
                'key_feature_1' => $this->input->post('key_feature_1'),
                'key_feature_2' => $this->input->post('key_feature_2')
            );
    
            // Add main image to data array
            if (isset($main_img)) {
                $data['main_img'] = $main_img;
            }
    
            // Merge client images into data array
            foreach ($client_images as $key => $image) {
                $data['client_image_' . $key] = $image;
            }
    
            // Call model to update data
            $result = $this->Service_9_model->edit($id, $data);
    
            // Set flash messages based on result
            if ($result) {
                $this->session->set_flashdata('success', 'Data updated successfully.');
            } else {
                $this->session->set_flashdata('error', 'Error occurred while updating data.');
            }
    
            // Redirect to appropriate page
            redirect('admin/Service9_admin_view/display_data');
        } else {
            // Load the data of the service to be edited
            $data['service'] = $this->Service_9_model->get_service_by_id($id);
            $this->load->view('admin/Service_9_section/edit', $data);
        }
    }



    public function delete($id = null)
    {
        if ($id === null) {
            $this->session->set_flashdata('error', 'Invalid ID.');
            redirect('admin/service9_admin_view/display_data');
        }

        $result = $this->Service_9_model->delete($id);

        if ($result) {
            $this->session->set_flashdata('success', 'Data deleted successfully.');
        } else {
            $this->session->set_flashdata('error', 'Error occurred while deleting data.');
        }

        redirect('admin/service9_admin_view/display_data');
    }
}


    
                    // echo "<pre>";
                    // print_r($_FILES);
                    // exit;