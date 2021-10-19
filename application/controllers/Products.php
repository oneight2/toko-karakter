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
        $id_category = $this->input->get('category');
        if ($id_category) {
            $data = array(
                'title' => "Toko Karakter",
                'imageAdress' => "http://localhost/e-catalog/assets/",
                'carousel' => $this->Product_model->carousel(),
                'category' => $this->Product_model->category(),
                'featured' => $this->Product_model->featured(),
                'imageProducts' => $this->Product_model->imageProducts(),
                'reviews' => $this->Product_model->reviews(),
                'about' => $this->Product_model->about(),
                'products' => $this->Product_model->productsCategory($id_category),
            );
        } else {
            $data = array(
                'title' => "Toko Karakter",
                'imageAdress' => "http://localhost/e-catalog/assets/",
                'carousel' => $this->Product_model->carousel(),
                'category' => $this->Product_model->category(),
                'featured' => $this->Product_model->featured(),
                'imageProducts' => $this->Product_model->imageProducts(),
                'reviews' => $this->Product_model->reviews(),
                'about' => $this->Product_model->about(),
                'products' => $this->Product_model->products(),
            );
        }

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
