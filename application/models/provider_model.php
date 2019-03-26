<?php

class Provider_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    public function set_provider()
    {
        $this->load->helper('url');
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'provider' => $this->input->post('provider'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone'),
        );
        return $this->db->insert('providers', $data);
    }

    public function get_providers()
    {
        $query = $this->db->get('providers');
        return $query->result_array();
    }
}
?>