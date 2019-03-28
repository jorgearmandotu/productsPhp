<?php

class Prices extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('price_model');
        $this->load->model('products_model');
        $this->load->model('provider_model');
        $this->load->helper('url_helper');
    }

    public function createPrices()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'ingrese Precios';
        $data['productsList'] = $this->products_model->get_product();
        $data['providersList'] = $this->provider_model->get_providers();
        $data['presentationList'] = $this->price_model->get_presentations();
        $data['brandsList'] = $this->price_model->get_brands();

        $this->form_validation->set_rules('product', 'El producto no puede ser nulo', 'required');
        $this->form_validation->set_rules('provider', 'El proveedor no puede ser nulo', 'required');
        $this->form_validation->set_rules('brand', 'la marca no puede ser nula', 'required');
        $this->form_validation->set_rules('presentation', 'la presentacion no puede ser nula', 'required');
        $this->form_validation->set_rules('price_unit', 'El precio no puede ser nulo', 'required');

        if($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('prices/create', $data);
            $this->load->helper('url');
            $this->load->view('templates/footer'); 
        }
        else
        {
            $this->price_model->set_price();

            $data['productsList'] = $this->products_model->get_product();
            $data['title']= 'productos';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('products/index', $data);
            $this->load->helper('url');
            $this->load->view('templates/footer'); 
            $this->load->view('templates/footer');
        }
    }

    public function create_presentation()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'ingrese Precios';
        $data['productsList'] = $this->products_model->get_product();
        $data['providersList'] = $this->provider_model->get_providers();
        $data['presentationList'] = $this->price_model->get_presentations();
        $data['brandsList'] = $this->price_model->get_brands();
        $this->form_validation->set_rules('presentation', 'debe escribir una presentacion valida', 'required');

        if($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('prices/create', $data);
            $this->load->helper('url');
            $this->load->view('templates/footer'); 
            $this->load->view('templates/footer');
        }
        else
        {
            $this->price_model->set_presentation();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('prices/create', $data);
            $this->load->helper('url');
            $this->load->view('templates/footer'); 
            $this->load->view('templates/footer');
        }
    }

    public function create_brand()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'ingrese Precios';
        $data['productsList'] = $this->products_model->get_product();
        $data['providersList'] = $this->provider_model->get_providers();
        $data['presentationList'] = $this->price_model->get_presentations();
        $data['brandsList'] = $this->price_model->get_brands();
        $this->form_validation->set_rules('brand', 'debe ingresar marca valida', 'required');

        if($this->form_validation->run() === FALSE )
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('prices/create', $data);
            $this->load->helper('url');
            $this->load->view('templates/footer'); 
            $this->load->view('templates/footer');
        }
        else
        {
            $this->price_model->set_brand();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('prices/create', $data);
            $this->load->helper('url');
            $this->load->view('templates/footer'); 
            $this->load->view('templates/footer');
        }
    }
}
?>