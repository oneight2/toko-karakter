<?php
class Product_model extends CI_Model
{

    function carousel()
    {
        $query = "SELECT * FROM `carousel` ";
        return $this->db->query($query)->result_array();
    }
    function category()
    {
        $query = "SELECT * FROM `category` ";
        return $this->db->query($query)->result_array();
    }
    function featured()
    {
        $query = "SELECT * FROM `featured_products` ";
        return $this->db->query($query)->result_array();
    }
    function products()
    {
        $query = "SELECT * FROM `products` JOIN `featured_products` ON `products`.`id_featured` = `featured_products`.`id_featured` JOIN `category` ON `products`.`id_category` = `category`.`id_category` ";
        return $this->db->query($query)->result_array();
    }
    function imageProducts()
    {
        $query = "SELECT * FROM `photo_products` ";
        return $this->db->query($query)->result_array();
    }
    function reviews()
    {
        $query = "SELECT * FROM `reviews` ";
        return $this->db->query($query)->result_array();
    }
    function about()
    {
        $query = "SELECT * FROM `about` ";
        return $this->db->query($query)->result_array();
    }
    function detailproduct($id)
    {
        $query = "SELECT * FROM `products` JOIN `featured_products` ON `products`.`id_featured` = `featured_products`.`id_featured` JOIN `category` ON `products`.`id_category` = `category`.`id_category` WHERE `products`.`id` = $id ";
        return $this->db->query($query)->result_array();
    }
    function relatedProducts($id_category)
    {
        $query = "SELECT * FROM `products` WHERE `id_category` = $id_category ";
        return $this->db->query($query)->result_array();
    }
    function imageProduct($id_photos)
    {
        $query = "SELECT * FROM `photo_products` WHERE `id_photo` = $id_photos ";
        return $this->db->query($query)->result_array();
    }
}
