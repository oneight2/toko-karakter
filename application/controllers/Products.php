<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('Product_model');
    }
    public function index()
    {
        $data = array(
            'title' => "Toko Karakter",
            'imageAdress' => "http://localhost/e-catalog/assets/",
            'carousel' => $this->Product_model->carousel(),
            'category' => $this->Product_model->category(),
            'featured' => $this->Product_model->featured(),
            'products' => $this->Product_model->products(),
            'imageProducts' => $this->Product_model->imageProducts(),
            'reviews' => $this->Product_model->reviews(),
            'about' => $this->Product_model->about(),
        );

        $this->load->view('templates/header_product', $data);
        $this->load->view('products', $data);
        $this->load->view('templates/footer_product', $data);
    }

    public function detailProduct($id)
    {
        $id_category = $this->input->get('category');
        $id_photos = $this->input->get('photos');
        $data = array(
            'title' => "Toko Karakter",
            'imageAdress' => "http://localhost/e-catalog/assets/",
            'category' => $this->Product_model->category(),
            'featured' => $this->Product_model->featured(),
            'product' =>  $this->Product_model->detailproduct($id),
            'imageProducts' => $this->Product_model->imageProducts(),
            'relatedProducts' => $this->Product_model->relatedProducts($id_category),
            'imageProduct' => $this->Product_model->imageProduct($id_photos),

        );
        $this->load->view('templates/header_product', $data);
        $this->load->view('detailProduct', $data);
        $this->load->view('templates/footer_product', $data);
    }
}
