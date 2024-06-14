<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_Admin_2 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model_2');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('upload');


        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/Admin_Login');
        }
    }

    
    // public function __construct()
    // {
       

    //     if (!$this->session->userdata('admin_logged_in')) {
    //         redirect('admin/Admin_Login');
    //     }
    // }


    public function display_data()
    {
        $data['Banner'] = $this->Home_model_2->getHomepageData();

        // var_dump($data['Banner']);

        $this->load->view('admin/Home_admin_view_2/view.php', $data);
    }


    public function add()
    {
        if ($this->input->post()) {
            $this->load->library('upload');

            $config['upload_path'] = './uploads/Home-page';
            $config['allowed_types'] = '*';
            $config['max_size'] = 4096;

            $this->upload->initialize($config);

            $uploaded_icons = array();

            for ($i = 1; $i <= 3; $i++) {
                if (!empty($_FILES['Properties_card_image_' . $i]['name'])) {
                    if ($this->upload->do_upload('Properties_card_image_' . $i)) {
                        $data = $this->upload->data();
                        $imagePath = 'uploads/Home-page/' . $data['file_name'];
                        $uploaded_icons['Properties_card_image_' . $i] = $imagePath;
                    } else {
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                    }
                }
            }

            $service_data = array(
                'About_us_desc' => $this->input->post('about_us_desc'),
                'Properties_card_title_1' => $this->input->post('Properties_card_title_1'),
                'Properties_card_title_2' => $this->input->post('Properties_card_title_2'),
                'Properties_card_title_3' => $this->input->post('Properties_card_title_3')
            );

            for ($i = 1; $i <= 6; $i++) {
                $service_data['Whychooseus_head_' . $i] = $this->input->post('Whychooseus_head_' . $i);
                $service_data['Whychooseus_desc_' . $i] = $this->input->post('Whychooseus_desc_' . $i);
            }

            $service_data = array_merge($service_data, $uploaded_icons);

            echo "<pre>";
            print_r($service_data);
            // exit;

            if ($this->Home_model_2->insertBanner($service_data)) {
                $this->session->set_flashdata('success', 'Service data inserted successfully.');
            } else {
                $this->session->set_flashdata('error', 'Error occurred while inserting service data.');
            }

            redirect('admin/Home_Admin_2/display_data');
        } else {
            $this->load->view('admin/Home_admin_view_2/add.php');
        }
    }





    public function edit($id = null)
    {
        if ($id === null) {
            // Handle case where no ID is provided
            redirect('admin/Home_Admin_2/display_data');
        }

        $this->load->model('Home_model_2');
        $data['id'] = $id;
        $data['Banner'] = $this->Home_model_2->getBannerById($id); // Adjust this method according to your model

        if ($this->input->post()) {

            $this->load->library('upload');

            $config['upload_path'] = './uploads/Home-page';
            $config['allowed_types'] = '*';
            $config['max_size'] = 4096;
            $this->upload->initialize($config);

            $uploaded_icons = array();

            for ($i = 1; $i <= 3; $i++) {
                $fieldName = 'Properties_card_image_' . $i;
                if (!empty($_FILES[$fieldName]['name'])) {
                    if ($this->upload->do_upload($fieldName)) {
                        $data = $this->upload->data();
                        $imagePath = 'uploads/Home-page/' . $data['file_name'];
                        $uploaded_icons[$fieldName] = $imagePath;
                    } else {
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        redirect('admin/Home_Admin_2/edit/' . $id);
                    }
                }
            }

            // Prepare data for database update
            $update_data = array(
                'About_us_desc' => $this->input->post('about_us_desc'),
                'Properties_card_title_1' => $this->input->post('Properties_card_title_1'),
                'Properties_card_title_2' => $this->input->post('Properties_card_title_2'),
                'Properties_card_title_3' => $this->input->post('Properties_card_title_3'),
                'Whychooseus_head_1' => $this->input->post('Whychooseus_head_1'),
                'Whychooseus_desc_1' => $this->input->post('Whychooseus_desc_1'),
                'Whychooseus_head_2' => $this->input->post('Whychooseus_head_2'),
                'Whychooseus_desc_2' => $this->input->post('Whychooseus_desc_2'),
                'Whychooseus_head_3' => $this->input->post('Whychooseus_head_3'),
                'Whychooseus_desc_3' => $this->input->post('Whychooseus_desc_3'),
                'Whychooseus_head_4' => $this->input->post('Whychooseus_head_4'),
                'Whychooseus_desc_4' => $this->input->post('Whychooseus_desc_4'),
                'Whychooseus_head_5' => $this->input->post('Whychooseus_head_5'),
                'Whychooseus_desc_5' => $this->input->post('Whychooseus_desc_5'),
                'Whychooseus_head_6' => $this->input->post('Whychooseus_head_6'),
                'Whychooseus_desc_6' => $this->input->post('Whychooseus_desc_6')
            );

            // Merge uploaded icons with update data
            $update_data = array_merge($update_data, $uploaded_icons);

            echo "<pre>";
            print_r($update_data);
            // exit;

            // Update data in the database
            if ($this->Home_model_2->updateBanner($id, $update_data)) {
                $this->session->set_flashdata('success', 'Banner data updated successfully.');
            } else {
                $this->session->set_flashdata('error', 'Error occurred while updating banner data.');
            }

            redirect('admin/Home_Admin_2/display_data');
        }

        // Load the edit view with banner data
        $this->load->view('admin/Home_admin_view_2/edit.php', $data);
    }





    public function delete($id = null)
    {
        if ($id === null) {
            $this->session->set_flashdata('error', 'Invalid ID provided.');
        } else {
            $this->load->model('Home_model_2');

            if ($this->Home_model_2->deleteBanner($id)) {
                $this->session->set_flashdata('success', 'Data deleted successfully.');
            } else {
                $this->session->set_flashdata('error', 'Failed to delete data.');
            }
        }

        redirect('admin/Home_Admin_2/display_data');
    }
}
