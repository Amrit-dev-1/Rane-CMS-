<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Footer_bar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Footer_model');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('upload');
    }


    public function display_data()
    {
        $data['Banner'] = $this->Footer_model->getHomepageData();

        $this->load->view('admin/Footer_Admin_view/view.php', $data);
    }


    public function add()
    {
        if ($this->input->post()) {
            $this->load->library('upload');

            $config['upload_path'] = './uploads/nav/';
            $config['allowed_types'] = '*';
            $config['max_size'] = 4096;

            $this->upload->initialize($config);

           

            $our_service_data = array(
                'address' => $this->input->post('address'),
                'Mobile_no' => $this->input->post('Mobile_no'),
                'Email' => $this->input->post('Email'),
                'Work_hours' => $this->input->post('Work_hours')
            );



            $our_service_data = array_merge($our_service_data);

            echo "<pre>";
            print_r($our_service_data);
            // exit;

            if ($this->Footer_model->insertBanner($our_service_data)) {
                $this->session->set_flashdata('success', 'Service data inserted successfully.');
            } else {
                $this->session->set_flashdata('error', 'Error occurred while inserting service data.');
            }

            redirect('admin/Footer_bar/display_data');
        } else {
            $this->load->view('admin/Footer_Admin_view/add.php');
        }
    }
    


    public function edit($id = null)
    {
        if ($id === null) {
            // Handle case where no ID is provided
            // Tanvi ke friend ne muje ask out kiya 
            redirect('admin/Navigation_bar/display_data');
        }
    
        $this->load->model('Footer_model');
        $data['id'] = $id;
        $data['Banner'] = $this->Footer_model->getBannerById($id);
    
        if ($this->input->post()) {
            // Form submitted
    
            // Load upload library
            $this->load->library('upload');
    
            // Configuration for file upload
            $config['upload_path'] = './uploads/nav/';
            $config['allowed_types'] = '*';
            $config['max_size'] = 4096;
            $this->upload->initialize($config);
    
            // Array to store uploaded file paths
            $uploaded_icons = array();
    
           
            $update_data = array(
                'address' => $this->input->post('address'),
                'Mobile_no' => $this->input->post('Mobile_no'),
                'Email' => $this->input->post('Email'),
                'Work_hours' => $this->input->post('Work_hours')
            );
    
            $update_data = array_merge($update_data, $uploaded_icons);
    
                
            echo "<pre>";
            print_r($update_data);
            // exit;

            // Update data in the database
            if ($this->Footer_model->updateBanner($id, $update_data)) {
                // Database update successful, set success flash message
                $this->session->set_flashdata('success', 'Banner data updated successfully.');
            } else {
                // Database update failed, set error flash message
                $this->session->set_flashdata('error', 'Error occurred while updating banner data.');
            }
    
            // Redirect to display data page
            redirect('admin/Footer_bar/display_data');
        }
    
        // Load the edit view with banner data
        $this->load->view('admin/Footer_Admin_view/edit.php', $data);
    }
    
    



    public function delete($id = null)
    {
        if ($id === null) {
            $this->session->set_flashdata('error', 'Invalid ID provided.');
        } else {
            $this->load->model('Footer_model');

            if ($this->Footer_model->deleteBanner($id)) {
                $this->session->set_flashdata('success', 'Data deleted successfully.');
            } else {
                $this->session->set_flashdata('error', 'Failed to delete data.');
            }
        }

        redirect('admin/Footer_bar/display_data');
    }
}
