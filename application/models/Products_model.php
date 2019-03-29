<?php
class Products_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    public function set_product()
    {
        $this->load->helper('url');
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'product' => $this->input->post('product'),
            'unit' => $this->input->post('unit'),
            'category' => $this->input->post('category'),
        );
        return $this->db->insert('products', $data);
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
            $this->db->get('products');
            $query = $this->db->order_by('product DESC');
            return $query->result_array();
        }
        $this->db->from('products');
        $this->db->like('product', $slug);
        $this->db->order_by('product', 'DESC');
        $query = $this->db->get();
        //$query = $this->db->get_where('products', array('product'=> $slug));
        return $query->result_array();
    }

    public function update_vlrs_product(){
        $this->load->helper('url');
        $price_unit = $this->input->post('price_unit');
        $promocion = $this->input->post('promocion');

        if($price_unit == '' && $promocion == ''){
            //no se actulaiza nada
            return NULL;
        }elseif($promocion == '' || $price_unit == ''){
            if($promocion == ''){
                //update precio
                $data = array(
                    'price_unit' => $price_unit
                );
            }else{
                //update promocion
                $data = array(
                    'promocion' => $promocion
                );
            }
        }else{
            //update precio and promocion
            $data = array(
                'price_unit' => $price_unit,
                'promocion' => $promocion,
            );
        }
        $dataWhere = array(
            'product'=> $this->input->post('product'),
            'brand'=> $this->input->post('brand'),
            'provider'=> $this->input->post('provider'),
            'presentation'=> $this->input->post('presentation'),
        );
        $this->db->where($dataWhere);
        return $this->db->update('prices', $data);
    }
}
?>