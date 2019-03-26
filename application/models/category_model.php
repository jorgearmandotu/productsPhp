<?php

class Category_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    public function set_category()
    {
        $this->load->helper('url');
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'category' => $this->input->post('category'),
        );
        return $this->db->insert('categories', $data);
	}
	
	public function get_categories()
    {
        $query = $this->db->get('categories');
        return $query->result_array();
    }
}
?>
