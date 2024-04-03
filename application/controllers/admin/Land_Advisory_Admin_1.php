<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Land_Advisory_Admin_1 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Land_Advisory_model_1');

        $this->load->library('session');

        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/Admin_Login');
        }
    }

    public function display_data()
    {
        $data['services'] = $this->Land_Advisory_model_1->get_all_data();


        $this->load->view('admin/Land_advisory_admin_view_1/view.php', $data);
    }




    public function add()
    {
        if ($this->input->post()) {
            $config['upload_path'] = './uploads/Land_advisory/';
            $config['allowed_types'] = '*';
            $config['max_size'] = 1024 * 10;
            $config['overwrite'] = true;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('Key_points_icon')) {

                $file_data = $this->upload->data();
                $file_name = $file_data['file_name'];

                $data = array(
                    'Key_points_head' => $this->input->post('Key_points_head'),
                    'Key_points_description' => $this->input->post('Key_points_description'),
                    'Key_points_icon' => $file_name
                );

                // echo "<pre>";
                // print_r($data);
                // exit;


                $result = $this->Land_Advisory_model_1->add($data);

                if ($result) {
                    $this->session->set_flashdata('success', 'Data inserted successfully.');
                } else {
                    $this->session->set_flashdata('error', 'Error occurred while inserting data.');
                }
            } else {

                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
            }

            redirect('admin/Land_Advisory_Admin_1/display_data');
        } else {
            $this->load->view('admin/Land_advisory_admin_view_1/add.php');
        }
    }





    public function edit($id = null)
    {
        if ($this->input->post()) {
            $id = $this->input->post('id');

            $this->load->library('upload');

            $config['upload_path'] = './uploads/Land_advisory/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 1024 * 10;
            $config['overwrite'] = true;
            $this->upload->initialize($config);

            if (!empty($_FILES['Key_points_icon']['name']) && $this->upload->do_upload('Key_points_icon')) {
                $main_img_data = $this->upload->data();
                $data['Key_points_icon'] = $main_img_data['file_name'];
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('admin/Land_Advisory_Admin_1/edit/' . $id);
            }

            $data['Key_points_head'] = $this->input->post('Key_points_head');
            $data['Key_points_description'] = $this->input->post('Key_points_description');

            $result = $this->Land_Advisory_model_1->edit($id, $data);

            if ($result) {
                $this->session->set_flashdata('success', 'Data updated successfully.');
            } else {
                $this->session->set_flashdata('error', 'Error occurred while updating data.');
            }

            redirect('admin/Land_Advisory_Admin_1/display_data');
        } else {
            $data['service'] = $this->Land_Advisory_model_1->get_service_by_id($id);
            $this->load->view('admin/Land_advisory_admin_view_1/edit.php', $data);
        }
    }




    public function delete($id = null)
    {
        if ($id === null) {
            $this->session->set_flashdata('error', 'Invalid ID.');
            redirect('admin/Land_Advisory_Admin_1/display_data');
        }

        $result = $this->Land_Advisory_model_1->delete($id);

        if ($result) {
            $this->session->set_flashdata('success', 'Data deleted successfully.');
        } else {
            $this->session->set_flashdata('error', 'Error occurred while deleting data.');
        }

        redirect('admin/Land_Advisory_Admin_1/display_data');
    }
}


    
                    // echo "<pre>";
                    // print_r($_FILES);
                    // exit;