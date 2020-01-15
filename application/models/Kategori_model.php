<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    public function getAllKategori_item()
    {
        $query = "SELECT * FROM `kategori_item`
                ";
        return $this->db->query($query)->result_array();
    }
}
