<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_login_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Verify admin credentials
    public function verifyAdmin($Email_id, $password)
    {
        $this->db->where('Email_id', $Email_id);
        $this->db->where('password', $password);
        $query = $this->db->get('admin');

        if ($query->num_rows() == 1) {
            return $query->row_array(); // Return admin data if credentials are correct
        } else {
            return false; // Return false if credentials are incorrect
        }
    }
}
?>
