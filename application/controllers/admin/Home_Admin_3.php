<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_Admin_3 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model_3');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('upload');
    }


    public function display_data()
    {
        $data['Banner'] = $this->Home_model_3->getHomepageData();

        $this->load->view('admin/Home_admin_view_3/view.php', $data);
    }


    public function add()
    {
        if ($this->input->post()) {
            $this->load->library('upload');

            $config['upload_path'] = './uploads/Home-page-icon/';
            $config['allowed_types'] = '*';
            $config['max_size'] = 4096;

            $this->upload->initialize($config);

            $uploaded_icons = array();

            if (!empty($_FILES['our_service_icon' ])) {
                if ($this->upload->do_upload('our_service_icon' )) {
                    $data = $this->upload->data();
                    $imagePath = 'uploads/Home-page-icon/' . $data['file_name'];
                    $uploaded_icons['our_service_icon'] = $imagePath;
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                }
            }


            $our_service_data = array(
                'our_service_title' => $this->input->post('our_service_title'),
                'our_service_icon' => $this->input->post('our_service_icon'),
                'our_service_head' => $this->input->post('our_service_head'),
                'our_service_desc' => $this->input->post('our_service_desc')
            );



            $our_service_data = array_merge($our_service_data, $uploaded_icons);

            echo "<pre>";
            print_r($our_service_data);
            // exit;

            if ($this->Home_model_3->insertBanner($our_service_data)) {
                $this->session->set_flashdata('success', 'Service data inserted successfully.');
            } else {
                $this->session->set_flashdata('error', 'Error occurred while inserting service data.');
            }

            redirect('admin/Home_Admin_3/display_data');
        } else {
            $this->load->view('admin/Home_admin_view_3/add.php');
        }
    }





    public function edit($id = null)
    {
        if ($id === null) {
            // Handle case where no ID is provided
            redirect('admin/Home_Admin_3/display_data');
        }

        $this->load->model('Home_model_3');
        $data['id'] = $id;
        $data['Banner'] = $this->Home_model_3->getBannerById($id); 

        if ($this->input->post()) {
            // Handle form submission

            $this->load->library('upload');

            // Configuration for file upload
           
            $config['upload_path'] = './uploads/Home-page-icon/';
            $config['allowed_types'] = '*';
            $config['max_size'] = 4096;
            $this->upload->initialize($config);

            $uploaded_icons = array();

                $fieldName = 'our_service_icon';
                if (!empty($_FILES[$fieldName]['name'])) {
                    if ($this->upload->do_upload($fieldName)) {
                        $data = $this->upload->data();
                        $imagePath = 'uploads/Home-page-icon/' . $data['file_name'];
                        $uploaded_icons[$fieldName] = $imagePath;
                    } else {
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        redirect('admin/Home_Admin_3/edit/');
                    }
                }

            // Prepare data for database update
            $update_data = array(
                'our_service_title' => $this->input->post('our_service_title'),
                'our_service_icon' => $this->input->post('our_service_icon'),
                'our_service_head' => $this->input->post('our_service_head'),
                'our_service_desc' => $this->input->post('our_service_desc')
            );

            // Merge uploaded icons with update data
            $update_data = array_merge($update_data, $uploaded_icons);

            echo "<pre>";
            print_r($update_data);
            // exit;

            // Update data in the database
            if ($this->Home_model_3->updateBanner($id, $update_data)) {
                $this->session->set_flashdata('success', 'Banner data updated successfully.');
            } else {
                $this->session->set_flashdata('error', 'Error occurred while updating banner data.');
            }

            redirect('admin/Home_Admin_3/display_data');
        }

        // Load the edit view with banner data
        $this->load->view('admin/Home_admin_view_3/edit.php', $data);
    }





    public function delete($id = null)
    {
        if ($id === null) {
            $this->session->set_flashdata('error', 'Invalid ID provided.');
        } else {
            $this->load->model('Home_model_3');

            if ($this->Home_model_3->deleteBanner($id)) {
                $this->session->set_flashdata('success', 'Data deleted successfully.');
            } else {
                $this->session->set_flashdata('error', 'Failed to delete data.');
            }
        }

        redirect('admin/Home_Admin_3/display_data');
    }
}
