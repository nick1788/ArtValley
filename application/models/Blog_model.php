<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function get_blog_item($id)
    {
        $query = $this->db->get_where('blog', array('id' => $id));
        return $query->row();
    }

    public function get_suggested_blogs($current_id)
    {
        $this->db->where('id !=', $current_id);
        return $this->db->get('blog')->result();
    }

    public function add($data)
    {
        // return $this->db->insert('blog', $data);

        $this->db->insert('blog', $data);
        return $this->db->affected_rows() > 0;
    }

    public function get_all_data()
    {
        return $this->db->get('blog')->result();
    }

    public function get_service_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('blog')->row_array();
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('blog', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('blog');
    }
}
