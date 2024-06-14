<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seo_admin_view_1 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Seo_model_1');
        $this->load->library('session');

        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/Admin_Login');
        }
    }

    public function display_data()
    {
        $data['services'] = $this->Seo_model_1->get_all_data();
        // echo "<pre>";
        // print_r($data);
        // exit;
        $this->load->view('admin/Seo_view_1/view.php',$data);
    }


    public function add()
    {
        if ($this->input->post()) {
            $data = array(
                'page' => $this->input->post('page'),
                'meta_title' => $this->input->post('meta_title'),
                'meta_description' => $this->input->post('meta_description')
            );
    
            $result = $this->Seo_model_1->add($data);
    
            if ($result) {
                $this->session->set_flashdata('success', 'Data inserted successfully.');
            } else {
                $this->session->set_flashdata('error', 'Error occurred while inserting data.');
            }
    
            redirect('admin/Seo_admin_view_1/display_data');
        } else {
            $this->load->view('admin/Seo_view_1/add');
        }
    }
    






    // public function edit($id = null)
    // {
    //     if ($this->input->post()) {
    //         $id = $this->input->post('id');

    //         $this->load->library('upload');

    //         if (!empty($_FILES['main-img']['name'])) {
    //             $config['upload_path'] = './uploads/Main-img/';
    //             $config['allowed_types'] = '*';
    //             $config['max_size'] = 1024 * 10;
    //             $config['overwrite'] = true;
    //             $this->upload->initialize($config);
    //             if ($this->upload->do_upload('main-img')) {
    //                 $main_img_data = $this->upload->data();
    //                 $main_img = $main_img_data['file_name'];
    //             } else {
    //                 $this->session->set_flashdata('error', $this->upload->display_errors());
    //                 redirect('admin/Seo_admin_view_1/edit/' . $id);
    //             }
    //         }

    //         $client_images = array();
    //         for ($i = 1; $i <= 4; $i++) {
    //             if (!empty($_FILES['client_image_' . $i]['name'])) {
    //                 $config['upload_path'] = './uploads/Logo/';
    //                 $config['allowed_types'] = '*';
    //                 $config['max_size'] = 1024 * 10;
    //                 $config['overwrite'] = true;
    //                 $this->upload->initialize($config);

    //                 if ($this->upload->do_upload('client_image_' . $i)) {
    //                     $client_img_data = $this->upload->data();
    //                     $client_images[$i] = $client_img_data['file_name'];
    //                 } else {
    //                     $this->session->set_flashdata('error', $this->upload->display_errors());
    //                     redirect('admin/Seo_admin_view_1/edit/' . $id);
    //                 }
    //             }
    //         }

    //         $data = array(
    //             'title' => $this->input->post('title'),
    //             'content' => $this->input->post('content'),
    //             'client_des_1' => $this->input->post('client_des_1'),
    //             'client_des_2' => $this->input->post('client_des_2'),
    //             'client_des_3' => $this->input->post('client_des_3'),
    //             'client_des_4' => $this->input->post('client_des_4'),
    //             'key_feature_1' => $this->input->post('key_feature_1'),
    //             'key_feature_2' => $this->input->post('key_feature_2')
    //         );

    //         if (isset($main_img)) {
    //             $data['main_img'] = $main_img;
    //         }

    //         foreach ($client_images as $key => $image) {
    //             $data['client_image_' . $key] = $image;
    //         }

    //         $result = $this->Seo_model_1->edit($id, $data);

    //         if ($result) {
    //             $this->session->set_flashdata('success', 'Data updated successfully.');
    //         } else {
    //             $this->session->set_flashdata('error', 'Error occurred while updating data.');
    //         }

    //         redirect('admin/Seo_admin_view_1/display_data');
    //     } else {
    //         $data['service'] = $this->Seo_model_1->get_service_by_id($id);
    //         $this->load->view('admin/Seo_view_1/edit', $data);
    //     }
    // }

    public function edit($id = null)
    {
        if ($this->input->post()) {
            $id = $this->input->post('id');
    
            $data = array(
                'page' => $this->input->post('page'),
                'meta_title' => $this->input->post('meta_title'),
                'meta_description' => $this->input->post('meta_description')
            );
    
            $result = $this->Seo_model_1->edit($id, $data);
    
            if ($result) {
                $this->session->set_flashdata('success', 'Data updated successfully.');
            } else {
                $this->session->set_flashdata('error', 'Error occurred while updating data.');
            }
    
            redirect('admin/Seo_admin_view_1/display_data');
        } else {
            $data['service'] = $this->Seo_model_1->get_service_by_id($id);
            $this->load->view('admin/Seo_view_1/edit', $data);
        }
    }
    


    public function delete($id = null)
    {
        if ($id === null) {
            $this->session->set_flashdata('error', 'Invalid ID.');
            redirect('admin/Seo_admin_view_1/display_data');
        }

        $result = $this->Seo_model_1->delete($id);

        if ($result) {
            $this->session->set_flashdata('success', 'Data deleted successfully.');
        } else {
            $this->session->set_flashdata('error', 'Error occurred while deleting data.');
        }

        redirect('admin/Seo_admin_view_1/display_data');
    }
}


    
                    // echo "<pre>";
                    // print_r($_FILES);
                    // exit;