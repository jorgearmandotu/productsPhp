<?php
class Products extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('products_model');
        $this->load->helper('url_helper'); 
    }

    public function index()
    {
        $data['productsList'] = $this->products_model->get_products();
        $data['title']= 'productos';

        $this->load->view('templates/header', $data);
        $this->load->view('products/index', $data);
        $this->load->view('templates/footer');
    }
    public function view($slug = NULL)
    {
        $data['products_item'] = $this->products_model->get_products($slug);

        if(empty($data['product_item']))
        {
            show_404();
        }
        $data['title'] = $data['product_item']['product'];

        $this->load->view('templates/header', $data);
        $this->load->view('products/view', $data);
        $this->load->view('templates/footer');
    }
}
?>