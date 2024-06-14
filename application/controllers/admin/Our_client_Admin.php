<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Our_client_Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Our_client_model');
        // $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('upload');

        $this->load->library('session');
        
        // Check if admin is not logged in, redirect to login page
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/Admin_Login');
        }

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

            $config['upload_path'] = './uploads/Our_client/';
            $config['allowed_types'] = '*';
            $config['max_size'] = 4096;

            $this->upload->initialize($config);

            $uploaded_icons = array();

            foreach ($_FILES as $field_name => $file_data) {
                if ($this->upload->do_upload($field_name)) {
                    $data = $this->upload->data();
                    $imagePath = 'uploads/Our_client/' . $data['file_name'];
                    $uploaded_icons[$field_name] = $imagePath;
                } else {

                    $this->session->set_flashdata('error', $this->upload->display_errors());
                }
            }

            // echo '<pre>';
            // print_r($uploaded_icons);
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


   

    public function edit($id)
    {
        $data['id'] = $id; 
        $data['Banner'] = $this->Our_client_model->getHomepageData($id);
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $id = $this->input->post('id');
    
            $uploaded_images = array();
    
            for ($i = 1; $i <= 8; $i++) {
                $field_name = 'our_client_' . $i;
    
                if (!empty($_FILES[$field_name]['name'])) {
                    $this->load->library('upload');
    
                    $config['upload_path'] = './uploads/Our_client/';
                    $config['allowed_types'] = '*';
                    $config['max_size'] = 4096;
    
                    $this->upload->initialize($config);
    
                    if ($this->upload->do_upload($field_name)) {
                        $uploaded_images[$field_name] = 'uploads/Our_client/' . $this->upload->data('file_name');
                    } else {
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        redirect('admin/Our_client_Admin/edit/' . $id);
                    }
                }
            }
    
            if ($this->Our_client_model->updateBanner($id, $uploaded_images)) {
                $this->session->set_flashdata('success', 'Data updated successfully.');
                redirect('admin/Our_client_Admin/display_data');
            } else {
                $this->session->set_flashdata('error', 'Failed to update data.');
            }
    
            redirect('admin/Our_client_Admin/display_data');
        } else {
            $this->load->view('admin/Our_client_view/edit.php', $data);
        }
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
