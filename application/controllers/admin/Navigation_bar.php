<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Navigation_bar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Navigation_model');
  
        $this->load->helper('url');
        $this->load->library('upload');

        $this->load->library('session');
    
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/Admin_Login');
        }
    }


    public function display_data()
    {
        $data['Banner'] = $this->Navigation_model->getHomepageData();

        $this->load->view('admin/Navigation_Admin_view/view.php', $data);
    }


    public function add()
    {
        if ($this->input->post()) {
            $this->load->library('upload');

            $config['upload_path'] = './uploads/nav/';
            $config['allowed_types'] = '*';
            $config['max_size'] = 4096;

            $this->upload->initialize($config);

            $uploaded_icons = array();

            if (!empty($_FILES['rane_icon' ])) {
                if ($this->upload->do_upload('rane_icon' )) {
                    $data = $this->upload->data();
                    $imagePath = 'uploads/nav/' . $data['file_name'];
                    $uploaded_icons['rane_icon'] = $imagePath;
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                }
            }


            $our_service_data = array(
                'menu_service_title' => $this->input->post('menu_service_title'),
                'menu_service_desc' => $this->input->post('menu_service_desc'),
                'Experties' => $this->input->post('Experties'),
                'Capabilities' => $this->input->post('Capabilities')
            );



            $our_service_data = array_merge($our_service_data, $uploaded_icons);

            echo "<pre>";
            print_r($our_service_data);
            // exit;

            if ($this->Navigation_model->insertBanner($our_service_data)) {
                $this->session->set_flashdata('success', 'Service data inserted successfully.');
            } else {
                $this->session->set_flashdata('error', 'Error occurred while inserting service data.');
            }

            redirect('admin/Navigation_bar/display_data');
        } else {
            $this->load->view('admin/Navigation_Admin_view/add.php');
        }
    }
    


    public function edit($id = null)
    {
        if ($id === null) {
            // Handle case where no ID is provided
            redirect('admin/Navigation_bar/display_data');
        }
    
        $this->load->model('Navigation_model');
        $data['id'] = $id;
        $data['Banner'] = $this->Navigation_model->getBannerById($id);
    
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
    
            // Field name for file upload
            $fieldName = 'rane_icon';
    
            if (!empty($_FILES[$fieldName]['name'])) {
                if ($this->upload->do_upload($fieldName)) {
                    $data = $this->upload->data();
                    $imagePath = 'uploads/nav/' . $data['file_name'];
                    $uploaded_icons[$fieldName] = $imagePath;
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    // Redirect back to edit page with correct ID
                    redirect('admin/Navigation_bar/edit/' . $id);
                }
            }
    
            // Prepare data for database update
            $update_data = array(
                'menu_service_title' => $this->input->post('menu_service_title'),
                'menu_service_desc' => $this->input->post('menu_service_desc'),
                'Experties' => $this->input->post('Experties'),
                'Capabilities' => $this->input->post('Capabilities')
            );
    
            $update_data = array_merge($update_data, $uploaded_icons);
    
                
            echo "<pre>";
            print_r($update_data);
            // exit;

            // Update data in the database
            if ($this->Navigation_model->updateBanner($id, $update_data)) {
                // Database update successful, set success flash message
                $this->session->set_flashdata('success', 'Banner data updated successfully.');
            } else {
                // Database update failed, set error flash message
                $this->session->set_flashdata('error', 'Error occurred while updating banner data.');
            }
    
            // Redirect to display data page
            redirect('admin/Navigation_bar/display_data');
        }
    
        // Load the edit view with banner data
        $this->load->view('admin/Navigation_Admin_view/edit.php', $data);
    }
    
    



    public function delete($id = null)
    {
        if ($id === null) {
            $this->session->set_flashdata('error', 'Invalid ID provided.');
        } else {
            $this->load->model('Navigation_model');

            if ($this->Navigation_model->deleteBanner($id)) {
                $this->session->set_flashdata('success', 'Data deleted successfully.');
            } else {
                $this->session->set_flashdata('error', 'Failed to delete data.');
            }
        }

        redirect('admin/Navigation_bar/display_data');
    }
}
