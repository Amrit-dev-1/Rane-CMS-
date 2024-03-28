<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model_1 extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Upload data from form
    public function insertBanner($data)
    {
        $this->db->insert('homepage_1', $data);
        return $this->db->affected_rows() > 0;
    }


    // get data code 
    public function getHomepageData($id = null)
    {
        if ($id !== null) {
            $this->db->where('ID', $id);
            $query = $this->db->get('homepage_1');
            return $query->row_array();
        } else {
            $query = $this->db->get('homepage_1');
            return $query->result_array();
        }
    }






    // delete function
    public function deleteBanner($id)
    {
        if ($id === null) {
            return false;
        }

        $this->db->where('ID', $id);
        $this->db->delete('homepage_1');

        return $this->db->affected_rows() > 0;
    }



    // edit code 

    public function getBannerById($id)
    {
        $query = $this->db->get_where('homepage_1', array('ID' => $id));
        return $query->row_array();
    }

    public function updateBanner($id, $data)
    {
        $this->db->where('ID', $id);
        return $this->db->update('homepage_1', $data);
    }
}
