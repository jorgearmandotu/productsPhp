<?php
class price_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function set_price()
    {
        $this->load->helper('url');

        $data = array(
            'product' => $this->input->post('product'),
            'brand' => $this->input->post('brand'),
            'presentation' => $this->input->post('presentation'),
            'provider' => $this->input->post('provider'),
            'price_unit' => $this->input->post('price_unit'),
        );
        return $this->db->insert('prices', $data);
    }

    public function set_presentation()
    {
        $this->load->helper('url');

        $data = array(
            'presentation' => $this->input->post('presentation'),
        );
        return $this->db->insert('presentations', $data);
    }

    public function set_brand()
    {
        $this->load->helper('url');

        $data = array(
            'brand' => $this->input->post('brand'),
        );
        return $this->db->insert('brands', $data);
    }

    public function get_presentations(){
        $query = $this->db->get('presentations');
        return $query->result_array();
    }

    public function get_brands(){
        $query = $this->db->get('brands');
        return $query->result_array();
    }
}
?>