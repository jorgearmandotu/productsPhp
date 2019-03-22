<?php
class Products_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_product($slug = FALSE)
    {
        if($slug === FALSE)
        {
            $query = $this->db->get('products');
            return $query->result_array();
        }
        /*$this->db->select('products.product, products.unit, price_unit, providers.provider, brands.brand, presentations.presentation');
        $this->db->from('products');
        $this->db->join('prices', 'products.id = prices.product');
        $this->db->join('providers', 'providers.id = prices.provider');
        $this->db->join('brands', 'brands.id = prices.brand');
        $this->db->join('presentations', 'presentations.id = prices.presentation');
        $this->db->where('products.id', $slug);*/
        $query = $this->db->query('CALL getDetailProduct('.$slug.')');
        //$query = $this->db->get();
        return $query->result_array();
    }


    /*public function get_search($slug = FALSE){
        $this->load->helper('url');
        $slug = url_title($this->input->post('txtsearch'), 'dash', TRUE);

        if($slug === FALSE)
        {
            $query = $this->db->get('products');
            return $query->result_array();
        }
        $this->db->from('products');
        $this->db->like('product', $slug);
        $query = $this->db->get();
        //$query = $this->db->get_where('products', array('product'=> $slug));
        return $query->result_array();
    }*/

    public function get_search(){
        $this->load->helper('url');
        $slug = url_title($this->input->post('txtsearch'), 'dash', TRUE);
        
        if($slug === FALSE)
        {
            $query = $this->db->get('products');
            return $query->result_array();
        }
        $this->db->from('products');
        $this->db->like('product', $slug);
        $query = $this->db->get();
        //$query = $this->db->get_where('products', array('product'=> $slug));
        return $query->result_array();
    }
}
?>