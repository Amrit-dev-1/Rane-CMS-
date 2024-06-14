<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About_Us_Admin_2 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('About_Us_model_2');

        $this->load->library('session');

        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin/Admin_Login');
        }

    }

    public function display_data()
    {
        $data['services'] = $this->About_Us_model_2->get_all_data();


        $this->load->view('admin/Aboutus_admin_view_2/view', $data);
    }



    public function add()
    {
        if ($this->input->post()) {

            $config['upload_path'] = './uploads/About-us/';
            $config['allowed_types'] = '*';
            $config['max_size'] = 1024 * 10;
            $config['overwrite'] = 1;
            $this->load->library('upload', $config);



            $data = array(
                'Our_Journey_title' => $this->input->post('Our_Journey_title'),
                'Our_Journey_year' => $this->input->post('Our_Journey_year'),
                'Year_content' => $this->input->post('Year_content'),

            );
            // echo "<pre>";
            // print_r($data);
            // exit;
            $result = $this->About_Us_model_2->add($data);
            if ($result) {
                $this->session->set_flashdata('success', 'Data inserted successfully.');
                redirect('admin/About_Us_Admin_2/display_data');
            } else {
                $this->session->set_flashdata('error', 'Error occurred while inserting data.');
            }
        } else {
            $this->load->view('admin/Aboutus_admin_view_2/add');
        }
    }


    public function edit($id = null)
    {
        if ($this->input->post()) {
            $id = $this->input->post('id');

            $this->load->library('upload');

            $data = array(
                'Our_Journey_title' => $this->input->post('Our_Journey_title'),
                'Our_Journey_year' => $this->input->post('Our_Journey_year'),
                'Year_content' => $this->input->post('Year_content'),
            );

            $result = $this->About_Us_model_2->edit($id, $data);

            if ($result) {
                $this->session->set_flashdata('success', 'Data updated successfully.');
            } else {
                $this->session->set_flashdata('error', 'Error occurred while updating data.');
            }

            redirect('admin/About_Us_Admin_2/display_data');
        } else {
            $data['service'] = $this->About_Us_model_2->get_service_by_id($id);

            if ($data['service'] === null) {
            } else {

                $this->load->view('admin/Aboutus_admin_view_2/edit', $data);
            }
        }
    }



    public function delete($id = null)
    {
        if ($id === null) {
            $this->session->set_flashdata('error', 'Invalid ID.');
            redirect('admin/About_Us_Admin_2/display_data');
        }

        $result = $this->About_Us_model_2->delete($id);

        if ($result) {
            $this->session->set_flashdata('success', 'Data deleted successfully.');
        } else {
            $this->session->set_flashdata('error', 'Error occurred while deleting data.');
        }

        redirect('admin/About_Us_Admin_2/display_data');
    }
}


    
                    // echo "<pre>";
                    // print_r($_FILES);
                    // exit;