<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('Home_model');
    }
    public function index()
    {
        $data = array(
            'title' => "Toko Karakter",
            'imageAdress' => "http://localhost/e-catalog/assets/",
            'carousel' => $this->Home_model->carousel(),
            'category' => $this->Home_model->category(),
            'featured' => $this->Home_model->featured(),
            'products' => $this->Home_model->products(),
            'imageProducts' => $this->Home_model->imageProducts(),
            'reviews' => $this->Home_model->reviews(),
            'about' => $this->Home_model->about(),
        );

        $this->load->view('templates/header', $data);
        $this->load->view('about', $data);
        $this->load->view('templates/footer', $data);
    }
}
