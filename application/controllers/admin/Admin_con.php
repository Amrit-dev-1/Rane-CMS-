<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_con extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('upload');
    }


    public function display_data()
    {
        $data['Banner'] = $this->Admin_model->getHomepageData();

        // var_dump($data['Banner']);
        // exit;
        $this->load->view('admin/Adminpanel_login_view/view.php', $data);
    }





    public function add()
    {
        if ($this->input->post()) {
            // Get form data
            $admin_id = $this->input->post('admin_id');
            $user_id = $this->input->post('user_id');
            $Email_id = $this->input->post('Email_id');
            $password = $this->input->post('password');

            // Prepare data for insertion
            $data = array(
                'admin_id' => $admin_id,
                'user_id' => $user_id,
                'Email_id' => $Email_id,
                'password' => $password
                // Add more fields as necessary
            );

            // Insert data into database
            if ($this->Admin_model->insertBanner($data)) {
                $this->session->set_flashdata('success', 'Data inserted successfully.');
            } else {
                $this->session->set_flashdata('error', 'Error occurred while inserting data.');
            }

            redirect('admin/Admin_con/display_data');
        } else {
            // Load the add form view
            $this->load->view('admin/Adminpanel_login_view/add.php');
        }
    }



    public function edit($id = null)
    {
        $this->load->model('Admin_model');

        // Load the banner data for the specified ID
        $data['Banner'] = $this->Admin_model->getBannerById($id);

        // If form is submitted
        if ($this->input->post()) {
            // Get form data
            $admin_id = $this->input->post('admin_id');
            $user_id = $this->input->post('user_id');
            $Email_id = $this->input->post('Email_id');
            $password = $this->input->post('password');

            // Prepare data for update
            $update_data = array(
                'admin_id' => $admin_id,
                'user_id' => $user_id,
                'Email_id' => $Email_id,
                'password' => $password
            );


      

            if ($this->Admin_model->updateBanner($id, $update_data)) {
                $this->session->set_flashdata('success', 'Banner data updated successfully.');

                echo "<pre>";
                print_r($update_data);
                // exit;
            } else {
                $this->session->set_flashdata('error', 'Error occurred while updating banner data.');
            }


            // Redirect back to the display_data method
            redirect('admin/Admin_con/display_data');
        }

        // Load the edit view with the banner data
        $this->load->view('admin/Adminpanel_login_view/edit.php', $data);
    }





    public function delete($id = null)
    {
        if ($id === null) {
            $this->session->set_flashdata('error', 'Invalid ID provided.');
        } else {
            $this->load->model('Admin_model');

            if ($this->Admin_model->deleteBanner($id)) {
                $this->session->set_flashdata('success', 'Data deleted successfully.');
            } else {
                $this->session->set_flashdata('error', 'Failed to delete data.');
            }
        }

        redirect('admin/Admin_con/display_data');
    }
}
