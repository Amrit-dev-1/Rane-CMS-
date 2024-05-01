<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_con extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');

        $this->load->helper('url');
        $this->load->library('upload');


        $this->load->library('session');

        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/Admin_Login');
        }
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



    // public function edit($id = null)
    // {
    //     $this->load->model('Admin_login_model');

    //     // Load the banner data for the specified ID
    //     $data['Banner'] = $this->Admin_login_model->getBannerById($id);


    //     // If form is submitted
    //     if ($this->input->post()) {
    //         // Get form data
    //         $admin_id = $this->input->post('admin_id');
    //         $user_id = $this->input->post('user_id');
    //         $Email_id = $this->input->post('Email_id');
    //         $password = $this->input->post('password');

    //         // Prepare data for update
    //         $update_data = array(
    //             'admin_id' => $admin_id,
    //             'user_id' => $user_id,
    //             'Email_id' => $Email_id,
    //             'password' => $password,
    //         );

    //         // echo "<pre>";
    //         // print_r($update_data);
    //         // exit;


    //         // Check if $id is set and update the banner data
    //         if ($id !== null && $this->Admin_login_model->updateBanner($id, $update_data)) {
    //             $this->session->set_flashdata('success', 'Banner data updated successfully.');
    //             // Redirect back to the display_data method
    //             redirect('admin/Admin_con/display_data');
    //         } else {
    //             $this->session->set_flashdata('error', 'Error occurred while updating banner data.');
    //         }
    //     }

    //     // Load the edit view with the banner data
    //     $this->load->view('admin/Adminpanel_login_view/edit.php', $data);
    // }

    public function edit($id = null)
    {
        $this->load->model('Admin_login_model');
        
        // Load the banner data for the specified ID
        $data['Banner'] = $this->Admin_login_model->getBannerById($id);
    
        // If banner data is not found, redirect to an error page
        // if (empty($data['Banner'])) {
        //     $this->session->set_flashdata('error', 'Banner data not found.');
        //     redirect('admin/error_page');
        // }
    
        // If form is submitted
        if ($this->input->post()) {
            // Validate form inputs
            $this->form_validation->set_rules('admin_id', 'Admin ID', 'required');
            $this->form_validation->set_rules('user_id', 'User ID', 'required');
            $this->form_validation->set_rules('Email_id', 'Email ID', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
    
            if ($this->form_validation->run() == true) {
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
                    'password' => $password,
                );
    
                // Update banner data
                if ($this->Admin_login_model->updateBanner($id, $update_data)) {
                    $this->session->set_flashdata('success', 'Banner data updated successfully.');
                    
                    redirect('admin/Admin_con/display_data');
                } else {
                    $this->session->set_flashdata('error', 'Error occurred while updating banner data.');
                }
            }
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
