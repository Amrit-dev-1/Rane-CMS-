<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About_Us_model_1 extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function add($data)
    {
        return $this->db->insert('aboutus_1', $data);
    }

    public function get_all_data()
    {
        return $this->db->get('aboutus_1')->result();
    }

    public function get_service_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('aboutus_1')->row_array();
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('aboutus_1', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('aboutus_1');
    }
}
