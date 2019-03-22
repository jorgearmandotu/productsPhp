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
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('txtsearch', 'texto a buscar', 'required');
            if($this->form_validation->run() === FALSE)
            {
                $data['productsList'] = $this->products_model->get_product();
                $data['title']= 'productos';
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');
                $this->load->view('products/index', $data);
                $this->load->view('templates/footer');
            }
            else
            {
                $data['productsList'] = $this->products_model->get_search();
                $data['title'] = 'productos';
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');
                $this->load->view('products/index', $data);
                $this->load->view('templates/footer');
            }
    }
    public function view($slug = NULL)
    {
        $data['product_item'] = $this->products_model->get_product($slug);

        if(empty($data['product_item']))
        {
            show_404();
        }
        $data['title'] = $data['product_item'][0]['product'];

        $this->load->view('templates/header', $data);
        $this->load->view('products/view', $data);
        $this->load->view('templates/footer');
    }
}
?>