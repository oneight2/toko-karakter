<?php
class Home_model extends CI_Model
{

    function carousel()
    {
        $query = "SELECT * FROM `carousel` ";
        return $this->db->query($query)->result_array();
    }
}
