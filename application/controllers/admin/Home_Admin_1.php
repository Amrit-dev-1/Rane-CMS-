<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_Admin_1 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model_1');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('upload');
    }


    public function display_data()
    {
        $data['Banner'] = $this->Home_model_1->getHomepageData();

        // var_dump($data['Banner']);

        $this->load->view('admin/Home_admin_view_1/view.php', $data);
    }





    public function add()
    {
        if ($this->input->post()) {
            $this->load->library('upload');

            $config['upload_path'] = './uploads/Home-page/';
            $config['allowed_types'] = '*';
            $config['max_size'] = 2048;

            $this->upload->initialize($config);

            $uploaded_images = array();
            $survey_icons = array();
            $mobile_banners = array();

            for ($i = 1; $i <= 5; $i++) {
                if (!empty($_FILES['desktop_banner_' . $i]['name'])) {
                    if ($this->upload->do_upload('desktop_banner_' . $i)) {
                        $data = $this->upload->data();
                        $imagePath = 'uploads/Home-page/' . $data['file_name'];
                        $uploaded_images['desktop_banner_' . $i] = $imagePath;
                    } else {
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                    }
                }
            }


            // echo "<pre>";
            // print_r($uploaded_images);

            for ($i = 1; $i <= 5; $i++) {
                if (!empty($_FILES['Survey_icon_' . $i]['name'])) {
                    if ($this->upload->do_upload('Survey_icon_' . $i)) {
                        $data = $this->upload->data();
                        $imagePath = 'uploads/Home-page/' . $data['file_name'];
                        $survey_icons['Survey_icon_' . $i] = $imagePath;
                    } else {
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                    }
                }
            }


            // echo "<pre>";
            // print_r($survey_icons);

            for ($i = 1; $i <= 5; $i++) {
                if (!empty($_FILES['Mobile_banner_' . $i]['name'])) {
                    if ($this->upload->do_upload('Mobile_banner_' . $i)) {
                        $data = $this->upload->data();
                        $imagePath = 'uploads/Home-page/' . $data['file_name'];
                        $mobile_banners['Mobile_banner_' . $i] = $imagePath;
                    } else {
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                    }
                }
            }



            // echo "<pre>";
            // print_r($mobile_banners);


            $banner_data = array(
                'desktop_banner_1' => $uploaded_images['desktop_banner_1'] ?? '',
                'desktop_banner_2' => $uploaded_images['desktop_banner_2'] ?? '',
                'desktop_banner_3' => $uploaded_images['desktop_banner_3'] ?? '',
                'desktop_banner_4' => $uploaded_images['desktop_banner_4'] ?? '',
                'desktop_banner_5' => $uploaded_images['desktop_banner_5'] ?? '',
                'Survey_icon_1' => $survey_icons['Survey_icon_1'] ?? '',
                'Survey_icon_2' => $survey_icons['Survey_icon_2'] ?? '',
                'Survey_icon_3' => $survey_icons['Survey_icon_3'] ?? '',
                'Survey_icon_4' => $survey_icons['Survey_icon_4'] ?? '',
                'Survey_icon_5' => $survey_icons['Survey_icon_5'] ?? '',
                'Survey_desc_1' => $this->input->post('Survey_desc_1'),
                'Survey_desc_2' => $this->input->post('Survey_desc_2'),
                'Survey_desc_3' => $this->input->post('Survey_desc_3'),
                'Survey_desc_4' => $this->input->post('Survey_desc_4'),
                'Survey_desc_5' => $this->input->post('Survey_desc_5'),
                'Mobile_banner_1' => $mobile_banners['Mobile_banner_1'] ?? '',
                'Mobile_banner_2' => $mobile_banners['Mobile_banner_2'] ?? '',
                'Mobile_banner_3' => $mobile_banners['Mobile_banner_3'] ?? '',
                'Mobile_banner_4' => $mobile_banners['Mobile_banner_4'] ?? '',
                'Mobile_banner_5' => $mobile_banners['Mobile_banner_5'] ?? ''
            );


            // echo "<pre>";
            // print_r($banner_data);
            if ($this->Home_model_1->insertBanner($banner_data)) {
                $this->session->set_flashdata('success', 'Banner data inserted successfully.');
            } else {
                $this->session->set_flashdata('error', 'Error occurred while inserting banner data.');
            }

            redirect('admin/Home_Admin_1/display_data');
        } else {
            $this->load->view('admin/Home_admin_view_1/add.php');
        }
        // $this->load->view('admin/Home_admin_view_1/add.php');

    }



    public function edit($id = null)
    {
        $this->load->model('Home_model_1');
        $this->load->library('upload');

        $data['id'] = $id;
        $data['Banner'] = $this->Home_model_1->getHomepageData($id);

        if ($this->input->post()) {
            $this->load->library('upload');

            $config['upload_path'] = './uploads/Home-page';
            $config['allowed_types'] = '*';
            $config['max_size'] = 4096;

            $this->upload->initialize($config);

            $uploaded_images = [];
            $uploaded_mobile_images = [];
            $uploaded_survey_images = [];
            $survey_desc  = [];

            for ($i = 1; $i <= 5; $i++) {
                $fieldName = 'desktop_banner_' . $i;
                if (!empty($_FILES[$fieldName]['name'])) {
                    if ($this->upload->do_upload($fieldName)) {
                        $upload_data = $this->upload->data();
                        $uploaded_images[$fieldName] = 'uploads/Home-page/' . $upload_data['file_name'];
                    } else {
                        echo $this->upload->display_errors();
                        exit;
                    }
                } else {
                    $existing_banner = $data['Banner'][$fieldName] ?? '';
                    $uploaded_images[$fieldName] = $existing_banner;
                }
            }


            for ($i = 1; $i <= 5; $i++) {
                $fieldName = 'Mobile_banner_' . $i;
                if (!empty($_FILES[$fieldName]['name'])) {
                    if ($this->upload->do_upload($fieldName)) {
                        $upload_data = $this->upload->data();
                        $uploaded_mobile_images[$fieldName] = 'uploads/Home-page/' . $upload_data['file_name'];
                    } else {
                        echo $this->upload->display_errors();
                        exit;
                    }
                } else {
                    $existing_banner = $data['Banner'][$fieldName] ?? '';
                    $uploaded_mobile_images[$fieldName] = $existing_banner;
                }
            }


            for ($i = 1; $i <= 5; $i++) {
                $fieldName = 'Survey_icon_' . $i;
                if (!empty($_FILES[$fieldName]['name'])) {
                    if ($this->upload->do_upload($fieldName)) {
                        $upload_data = $this->upload->data();
                        $uploaded_survey_images[$fieldName] = 'uploads/Home-page/' . $upload_data['file_name'];
                    } else {
                        echo $this->upload->display_errors();
                        exit;
                    }
                } else {
                    $existing_banner = $data['Banner'][$fieldName] ?? '';
                    $uploaded_survey_images[$fieldName] = $existing_banner;
                }
            }


            // for ($i = 1; $i <= 5; $i++) {
            //     $fieldName = 'survey_desc_' . $i;

            //     $survey_desc[$fieldName] = $this->input->post($fieldName);
            // }

            for ($i = 1; $i <= 5; $i++) {
                $fieldName = 'survey_desc_' . $i;
                $survey_desc[$fieldName] = $this->input->post($fieldName);
            }
            



            $update_data = [];

            $update_data = array_merge($uploaded_images, $uploaded_mobile_images, $uploaded_survey_images, $survey_desc);

            foreach ($uploaded_images as $fieldName => $image) {
                if (!empty($image)) {
                    $update_data[$fieldName] = $image;
                }
            }

            echo "<pre>";
            print_r($update_data);
            // exit;


            if (!empty($update_data)) {
                if ($this->Home_model_1->updateBanner($id, $update_data)) {
                    $this->session->set_flashdata('success', 'Banner data updated successfully.');
                } else {
                    $this->session->set_flashdata('error', 'Error occurred while updating banner data.');
                }
            }

            redirect('admin/Home_Admin_1/display_data');
        }

        $this->load->view('admin/Home_admin_view_1/edit.php', $data);
    }




    public function delete($id = null)
    {
        if ($id === null) {
            $this->session->set_flashdata('error', 'Invalid ID provided.');
        } else {
            $this->load->model('Home_model_1');

            if ($this->Home_model_1->deleteBanner($id)) {
                $this->session->set_flashdata('success', 'Data deleted successfully.');
            } else {
                $this->session->set_flashdata('error', 'Failed to delete data.');
            }
        }

        redirect('admin/Home_Admin_1/display_data');
    }
}
