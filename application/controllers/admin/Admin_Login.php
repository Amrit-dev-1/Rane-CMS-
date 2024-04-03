<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_login_model'); 
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('admin/Admin_form_view.php');
    }

    public function login()
    {
        // Check if form is submitted
        if ($this->input->post()) {
            $Email_id = $this->input->post('Email_id');
            $password = $this->input->post('password');

            // Verify admin credentials
            $admin = $this->Admin_login_model->verifyAdmin($Email_id, $password);
            if ($admin) {
                // Admin login successful
                $this->session->set_userdata('admin_logged_in', true);
                $this->session->set_userdata('admin_data', $admin);

                // Set success flash message
                $this->session->set_flashdata('success', 'Login successful.');

                redirect('admin/index');
            } else {
                // Admin login failed
                $this->session->set_flashdata('error', 'Invalid credentials');
                redirect('admin/Admin_Login');
            }
        }
    }
}
?>
