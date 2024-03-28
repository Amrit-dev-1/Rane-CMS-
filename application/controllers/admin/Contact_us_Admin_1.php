<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_us_Admin_1 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Contact_us_model_1');

        $this->load->library('session');
    }

    public function display_data()
    {
        $data['services'] = $this->Contact_us_model_1->get_all_data();


        $this->load->view('admin/Contactus_admin_view/view.php', $data);
    }




    public function add()
    {
        if ($this->input->post()) {
            $data = array(
                'Registered_Office_title' => $this->input->post('Registered_Office_title'),
                'Registered_Office_address' => $this->input->post('Registered_Office_address'),
                'Working_hours_time' => $this->input->post('Working_hours_time'),
                'Working_hours_days' => $this->input->post('Working_hours_days')
            );

            $result = $this->Contact_us_model_1->add($data);

            if ($result) {
                $this->session->set_flashdata('success', 'Data inserted successfully.');
            } else {
                $this->session->set_flashdata('error', 'Error occurred while inserting data.');
            }

            redirect('admin/Contact_us_Admin_1/display_data');
        } else {
            $this->load->view('admin/Contactus_admin_view/add.php');
        }
    }




    public function edit($id = null)
    {
        if ($this->input->post()) {
            $id = $this->input->post('id');

            // Prepare data array for update
            $data = array(
                'Registered_Office_title' => $this->input->post('Registered_Office_title'),
                'Registered_Office_address' => $this->input->post('Registered_Office_address'),
                'Working_hours_time' => $this->input->post('Working_hours_time'),
                'Working_hours_days' => $this->input->post('Working_hours_days')
            );

            // Update data in the database
            $result = $this->Contact_us_model_1->edit($id, $data);

            if ($result) {
                $this->session->set_flashdata('success', 'Data updated successfully.');
            } else {
                $this->session->set_flashdata('error', 'Error occurred while updating data.');
            }

            redirect('admin/Contact_us_Admin_1/display_data');
        } else {
            // If form not submitted, load the view with data for editing
            $data['service'] = $this->Contact_us_model_1->get_service_by_id($id);
            $this->load->view('admin/Contactus_admin_view/edit.php', $data);
        }
    }




    public function delete($id = null)
    {
        if ($id === null) {
            $this->session->set_flashdata('error', 'Invalid ID.');
            redirect('admin/Contact_us_Admin_1/display_data');
        }

        $result = $this->Contact_us_model_1->delete($id);

        if ($result) {
            $this->session->set_flashdata('success', 'Data deleted successfully.');
        } else {
            $this->session->set_flashdata('error', 'Error occurred while deleting data.');
        }

        redirect('admin/Contact_us_Admin_1/display_data');
    }
}


    
                    // echo "<pre>";
                    // print_r($_FILES);
                    // exit;