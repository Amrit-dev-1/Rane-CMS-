<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Land_Advisory_Admin_2 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Land_Advisory_model_2');

        $this->load->library('session');

        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/Admin_Login');
        }
    }

    public function display_data()
    {
        $data['services'] = $this->Land_Advisory_model_2->get_all_data();


        $this->load->view('admin/Land_advisory_admin_view_2/view.php', $data);
    }




    public function add()
    {
        if ($this->input->post()) {
            $config['upload_path'] = './uploads/Land_advisory/';
            $config['allowed_types'] = '*';
            $config['max_size'] = 1024 * 10;
            $config['overwrite'] = true;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('case_study_img')) {

                $file_data = $this->upload->data();
                $file_name = $file_data['file_name'];

                $data = array(
                    'Case_study_title' => $this->input->post('Case_study_title'),
                    'case_study_description' => $this->input->post('case_study_description'),
                    'case_study_img' => $file_name
                );

                echo "<pre>";
                print_r($data);
                // exit;


                $result = $this->Land_Advisory_model_2->add($data);

                if ($result) {
                    $this->session->set_flashdata('success', 'Data inserted successfully.');
                } else {
                    $this->session->set_flashdata('error', 'Error occurred while inserting data.');
                }
            } else {

                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
            }

            redirect('admin/Land_Advisory_Admin_2/display_data');
        } else {
            $this->load->view('admin/Land_advisory_admin_view_2/add.php');
        }
    }





    public function edit($id = null)
    {
        if ($this->input->post()) {
            $id = $this->input->post('id');

            $this->load->library('upload');

            $config['upload_path'] = './uploads/Land_advisory/';
            $config['allowed_types'] = '*';
            $config['max_size'] = 1024 * 10;
            $config['overwrite'] = true;
            $this->upload->initialize($config);

            if (!empty($_FILES['case_study_img']['name']) && $this->upload->do_upload('case_study_img')) {
                $main_img_data = $this->upload->data();
                $data['case_study_img'] = $main_img_data['file_name'];
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                // redirect('admin/Land_Advisory_Admin_2/edit/' . $id);
            }

            $data['Case_study_title'] = $this->input->post('Case_study_title');
            $data['case_study_description'] = $this->input->post('case_study_description');

            $result = $this->Land_Advisory_model_2->edit($id, $data);

            if ($result) {
                $this->session->set_flashdata('success', 'Data updated successfully.');
            } else {
                $this->session->set_flashdata('error', 'Error occurred while updating data.');
            }

            redirect('admin/Land_Advisory_Admin_2/display_data');
        } else {
            $data['service'] = $this->Land_Advisory_model_2->get_service_by_id($id);
            $this->load->view('admin/Land_advisory_admin_view_2/edit.php', $data);
        }
    }




    public function delete($id = null)
    {
        if ($id === null) {
            $this->session->set_flashdata('error', 'Invalid ID.');
            redirect('admin/Land_Advisory_Admin_2/display_data');
        }

        $result = $this->Land_Advisory_model_2->delete($id);

        if ($result) {
            $this->session->set_flashdata('success', 'Data deleted successfully.');
        } else {
            $this->session->set_flashdata('error', 'Error occurred while deleting data.');
        }

        redirect('admin/Land_Advisory_Admin_2/display_data');
    }
}


    
                    // echo "<pre>";
                    // print_r($_FILES);
                    // exit;