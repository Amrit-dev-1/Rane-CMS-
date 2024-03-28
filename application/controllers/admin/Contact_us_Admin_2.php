<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_us_Admin_2 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Contact_us_model_2');

        $this->load->library('session');
    }

    public function display_data()
    {
        $data['services'] = $this->Contact_us_model_2->get_all_data();
        $this->load->view('admin/Contactus_admin_view_2/view.php', $data);
    }




    public function add()
    {
        if ($this->input->post()) {
            $data = array(
                'Phone_no' => $this->input->post('Phone_no'),
                'Email_id' => $this->input->post('Email_id'),
                'Branch_Office_titile' => $this->input->post('Branch_Office_titile'),
                'Branch_Office_address' => $this->input->post('Branch_Office_address'),
                'G_map' => $this->input->post('G_map')

            );

            $result = $this->Contact_us_model_2->add($data);

            if ($result) {
                $this->session->set_flashdata('success', 'Data inserted successfully.');
            } else {
                $this->session->set_flashdata('error', 'Error occurred while inserting data.');
            }

            redirect('admin/Contact_us_Admin_2/display_data');
        } else {
            $this->load->view('admin/Contactus_admin_view_2/add');
        }
    }




    public function edit($id = null)
    {
        if ($this->input->post()) {
            $id = $this->input->post('id');

            // Prepare data array for update
            $data = array(
                'Phone_no' => $this->input->post('Phone_no'),
                'Email_id' => $this->input->post('Email_id'),
                'Branch_Office_titile' => $this->input->post('Branch_Office_titile'),
                'Branch_Office_address' => $this->input->post('Branch_Office_address'),
                'G_map' => $this->input->post('G_map')

            );

            // Update data in the database
            $result = $this->Contact_us_model_2->edit($id, $data);

            if ($result) {
                $this->session->set_flashdata('success', 'Data updated successfully.');
            } else {
                $this->session->set_flashdata('error', 'Error occurred while updating data.');
            }

            redirect('admin/Contact_us_Admin_2/display_data');
        } else {
            // If form not submitted, load the view with data for editing
            $data['service'] = $this->Contact_us_model_2->get_service_by_id($id);
            $this->load->view('admin/Contactus_admin_view_2/edit.php', $data);
        }
    }




    public function delete($id = null)
    {
        if ($id === null) {
            $this->session->set_flashdata('error', 'Invalid ID.');
            redirect('admin/Contact_us_Admin_2/display_data');
        }

        $result = $this->Contact_us_model_2->delete($id);

        if ($result) {
            $this->session->set_flashdata('success', 'Data deleted successfully.');
        } else {
            $this->session->set_flashdata('error', 'Error occurred while deleting data.');
        }

        redirect('admin/Contact_us_Admin_2/display_data');
    }
}


    
                    // echo "<pre>";
                    // print_r($_FILES);
                    // exit;