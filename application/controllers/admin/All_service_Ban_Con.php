<?php
defined('BASEPATH') or exit('No direct script access allowed');

class All_service_Ban_Con extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Service_banner_model');
        $this->load->library('session');
        $this->load->helper('url');          
        $this->load->library('upload');
    }


    public function display_data()
    {
        $data['Banner'] = $this->Service_banner_model->getHomepageData();
        $this->load->view('admin/ALL_service_admin_view/view.php', $data);
    }


    public function add()
    {
        if ($this->input->post()) {
            $this->load->library('upload');

            $config['upload_path'] = './uploads/All_service_banner/';
            $config['allowed_types'] = '*';
            $config['max_size'] = 4096;

            $this->upload->initialize($config);

            $uploaded_icons = array();

            if (!empty($_FILES['service_banner_image'])) {
                if ($this->upload->do_upload('service_banner_image')) {
                    $data = $this->upload->data();
                    $imagePath = 'uploads/All_service_banner/' . $data['file_name'];
                    $uploaded_icons['service_banner_image'] = $imagePath;
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                }
            }


            $our_service_data = array(
                'tag_title' => $this->input->post('tag_title'),
                'tag_desc' => $this->input->post('tag_desc'),

            );



            $our_service_data = array_merge($our_service_data, $uploaded_icons);

            // echo "<pre>";
            // print_r($our_service_data);
            // exit;

            if ($this->Service_banner_model->insertBanner($our_service_data)) {
                $this->session->set_flashdata('success', 'Service data inserted successfully.');
            } else {
                $this->session->set_flashdata('error', 'Error occurred while inserting service data.');
            }

            redirect('admin/All_service_Ban_Con/display_data');
        } else {
            $this->load->view('admin/ALL_service_admin_view/add.php');
        }
    }




    public function edit($id = null)
    {
        if ($id === null) {
            redirect('admin/Home_Admin_3/display_data');
        }
    
        $this->load->model('Service_banner_model');
        $data['id'] = $id;
        $data['Banner'] = $this->Service_banner_model->getBannerById($id);
    
        if (empty($data['Banner'])) {
            // Banner with the given id not found, redirect to an appropriate page
            redirect('admin/Home_Admin_3/display_data');
        }
    
        if ($this->input->post()) {
            $this->load->library('upload');
    
            $config['upload_path'] = './uploads/All_service_banner/';
            $config['allowed_types'] = '*';
            $config['max_size'] = 4096;
            $this->upload->initialize($config);
    
            $uploaded_icons = array();
            $fieldName = 'service_banner_image';
    
            if (!empty($_FILES[$fieldName]['name'])) {
                if ($this->upload->do_upload($fieldName)) {
                    $data = $this->upload->data();
                    $imagePath = 'uploads/All_service_banner/' . $data['file_name'];
                    $uploaded_icons[$fieldName] = $imagePath;
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('admin/All_service_Ban_Con/edit/' . $id);
                }
            }
    
            $update_data = array(
                'tag_title' => $this->input->post('tag_title'),
                'tag_desc' => $this->input->post('tag_desc'),
            );
    
            $update_data = array_merge($update_data, $uploaded_icons);
    
            if ($this->Service_banner_model->updateBanner($id, $update_data)) {
                $this->session->set_flashdata('success', 'Banner data updated successfully.');
            } else {
                $this->session->set_flashdata('error', 'Error occurred while updating banner data.');
            }
    
            redirect('admin/All_service_Ban_Con/display_data');
        }
    
        $this->load->view('admin/ALL_service_admin_view/edit.php', $data);
    }
    
    




    public function delete($id = null)
    {
        if ($id === null) {
            $this->session->set_flashdata('error', 'Invalid ID provided.');
        } else {
            $this->load->model('Service_banner_model');

            if ($this->Service_banner_model->deleteBanner($id)) {
                $this->session->set_flashdata('success', 'Data deleted successfully.');
            } else {
                $this->session->set_flashdata('error', 'Failed to delete data.');
            }
        }

        redirect('admin/All_service_Ban_Con/display_data');
    }
}
