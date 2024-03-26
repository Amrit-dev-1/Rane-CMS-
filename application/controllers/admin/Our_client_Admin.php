<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Our_client_Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Our_client_model');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('upload');
    }


    public function display_data()
    {
        $data['Banner'] = $this->Our_client_model->getHomepageData();

        $this->load->view('admin/Our_client_view/view.php', $data);
    }



    public function add()
    {
        // echo "<pre>";
        // print_r($this->input->post());
        // print_r($_FILES);

        if (!empty($_FILES)) {
            $this->load->library('upload');

            $config['upload_path'] = './uploads/Home-page-icon/';
            $config['allowed_types'] = '*';
            $config['max_size'] = 4096;

            $this->upload->initialize($config);

            $uploaded_icons = array();

            foreach ($_FILES as $field_name => $file_data) {
                if ($this->upload->do_upload($field_name)) {
                    $data = $this->upload->data();
                    $imagePath = 'uploads/Home-page-icon/' . $data['file_name'];
                    $uploaded_icons[$field_name] = $imagePath;
                } else {

                    $this->session->set_flashdata('error', $this->upload->display_errors());
                }
            }

            echo '<pre>';
            print_r($uploaded_icons);
            // exit();

            if (!empty($uploaded_icons)) {
                if ($this->Our_client_model->insertBanner($uploaded_icons)) {
                    $this->session->set_flashdata('success', 'Service data inserted successfully.');
                } else {
                    $this->session->set_flashdata('error', 'Error occurred while inserting service data.');
                }
            } else {
                $this->session->set_flashdata('error', 'No files were uploaded.');
            }

            redirect('admin/Our_client_Admin/display_data');
        } else {
            $this->load->view('admin/Our_client_view/add.php');
        }
    }







    // public function edit($id = null)
    // {
    //     $this->load->model('Our_client_model');
    //     $data['id'] = $id;
    //     $data['Banner'] = $this->Our_client_model->getBannerById($id);

    //     // Print the POST data and uploaded files for debugging
    //     // echo "<pre>";
    //     // print_r($this->input->post());
    //     // print_r($_FILES);

    //     $this->load->library('upload');

    //     $config['upload_path'] = './uploads/Home-page-icon/';
    //     $config['allowed_types'] = '*';
    //     $config['max_size'] = 4096;

    //     $this->upload->initialize($config);

    //     $uploaded_icons = array();

    //     foreach ($_FILES as $field_name => $file_data) {
    //         if (!empty($file_data['name'])) {
    //             if ($this->upload->do_upload($field_name)) {
    //                 $data = $this->upload->data();
    //                 $imagePath = 'uploads/Home-page-icon/' . $data['file_name'];
    //                 $uploaded_icons[$field_name] = $imagePath;
    //             } else {
    //                 $this->session->set_flashdata('error', $this->upload->display_errors());
    //                 redirect('admin/Home_Admin_3/edit/');
    //             }
    //         }
    //     }

    //     $update_data = $uploaded_icons;

    //     // Print the updated data for debugging
    //     // echo "<pre>";
    //     // print_r($update_data);
    //     // exit;

    //     if ($this->Our_client_model->updateBanner($id, $update_data)) {
    //         $this->session->set_flashdata('success', 'Banner data updated successfully.');
    //     } else {
    //         $this->session->set_flashdata('error', 'Error occurred while updating banner data.');
    //     }

    //     redirect('admin/Our_client_Admin/edit/');
    // }




    public function edit($id = null)
    {
        $this->load->model('Our_client_model');
        $data['id'] = $id;
        $data['Banner'] = $this->Our_client_model->getBannerById($id);

        $this->load->library('upload');

        $config['upload_path'] = './uploads/Home-page-icon/';
        $config['allowed_types'] = '*';
        $config['max_size'] = 4096;

        $this->upload->initialize($config);

        // Array to store uploaded file paths
        $uploaded_icons = array();

        // Loop through each file input
        foreach ($_FILES as $field_name => $file_data) {
            if (!empty($file_data['name'])) {
                // If a file is uploaded for this field
                if ($this->upload->do_upload($field_name)) {
                    $data = $this->upload->data();
                    $imagePath = 'uploads/Home-page-icon/' . $data['file_name'];
                    $uploaded_icons[$field_name] = $imagePath;
                } else {
                    // Handle upload errors
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('admin/Home_Admin_3/edit/');
                }
            }
        }

        // Update the banner data using the Our_client_model
        if ($this->Our_client_model->updateBanner($id, $uploaded_icons)) {
            $this->session->set_flashdata('success', 'Banner data updated successfully.');
        } else {
            $this->session->set_flashdata('error', 'Error occurred while updating banner data.');
        }

        // Redirect to the edit page
        redirect('admin/Our_client_Admin/edit/');
    }




    public function delete($id = null)
    {
        if ($id === null) {
            $this->session->set_flashdata('error', 'Invalid ID provided.');
        } else {
            $this->load->model('Our_client_model');

            if ($this->Our_client_model->deleteBanner($id)) {
                $this->session->set_flashdata('success', 'Data deleted successfully.');
            } else {
                $this->session->set_flashdata('error', 'Failed to delete data.');
            }
        }

        redirect('admin/Our_client_Admin/display_data');
    }
}
