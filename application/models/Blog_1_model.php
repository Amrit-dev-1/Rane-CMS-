<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog_1_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function add($data)
    {
        return $this->db->insert('blog_1', $data);
    }

    public function get_all_data()
    {
        return $this->db->get('blog_1')->result();
    }

    public function get_service_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('blog_1')->row_array();
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('blog_1', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('blog_1');
    }
}
