<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konfirmasi_model extends CI_Model
{
    public function getAllKonfirmasi()
    {
        $query = "SELECT * FROM `checkout`
                ";
        return $this->db->query($query)->result_array();
    }

    public function getKonfirmasiById($id){
        return $this->db->get_where('checkout', ['id_checkout'=>$id])->row_array();
    }
}
