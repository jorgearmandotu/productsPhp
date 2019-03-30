<?php
class Products extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('products_model');
        $this->load->model('provider_model');
        $this->load->model('category_model');
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
        $this->load->helper('form');
        $this->load->library('form_validation');
        

        $this->form_validation->set_rules('id', 'el id de precio ', 'required');
        //$this->form_validation->set_rules('price_unit', 'la presentacion', 'required');
        //$this->form_validation->set_rules('promocion', 'la presentacion', 'required');

        if($this->form_validation->run() === FALSE)
        {
            $data['product_item'] = $this->products_model->get_product($slug);

            if(empty($data['product_item']))
            {
                show_404();
            }
            $data['title'] = $data['product_item'][0]['product'];
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('products/view', $data);
            $this->load->view('templates/footer');
        }
        else
        {
            $this->products_model->update_vlrs_product();
            $data['product_item'] = $this->products_model->get_product($slug);

            if(empty($data['product_item']))
            {
                show_404();
            }
            $data['title'] = $data['product_item'][0]['product'];
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('products/view', $data);
            $this->load->view('templates/footer');
        }
        
    }

    public function createProduct() {
        $this->load->helper('form');
        $this->load->library('form_validation');

		$data['title'] = 'Ingresar nuevo Producto';
		$data['categories'] = $this->category_model->get_categories();

        $this->form_validation->set_rules('product', 'nombre de Producto es necesario', 'required');
        $this->form_validation->set_rules('unit', 'unidad de Producto es necesario', 'required');
        $this->form_validation->set_rules('category', 'categoria de Producto es necesario', 'required');

        if($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('products/create', $data);
            $this->load->view('templates/footer');
        }
        else
        {
            $this->products_model->set_product();
            
            $data['productsList'] = $this->products_model->get_product();
            $data['title']= 'productos';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('products/index', $data);
            $this->load->view('templates/footer');
        }
    }

    public function createProvider(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Ingresar nuevo proveedor';

        $this->form_validation->set_rules('provider', 'nombre proveedor', 'required');

        if($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('providers/create');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->provider_model->set_provider();
            
            $data['productsList'] = $this->products_model->get_product();
            $data['title']= 'productos';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('products/index', $data);
            $this->load->view('templates/footer');
        }
    }

    public function createCategory(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Ingresar nueva Categoria';

        $this->form_validation->set_rules('category', 'nombre categoria', 'required');

        if($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('categories/create');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->category_model->set_category();
            
            $data['productsList'] = $this->products_model->get_product();
            $data['title']= 'productos';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('products/index', $data);
            $this->load->view('templates/footer');
        }
    }
}
?>
