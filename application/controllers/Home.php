<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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
            'carousel' => $this->Home_model->carousel(),
        );

        $this->load->view('templates/header', $data);
        $this->load->view('home', $data);
        $this->load->view('templates/footer', $data);
    }

    function product_data()
    {
        $data = $this->About_model->product_list();
        echo json_encode($data);
    }


    function update()
    {
        $data = $this->About_model->update_product();
        echo json_encode($data);
    }
}
