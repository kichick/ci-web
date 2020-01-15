<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jual_model extends CI_Model
{
    public function getAllJual()
    {
        $query = "SELECT `jual`.`id_jual`, `jual`.`nama`, `jual`.`nama_pemilik_rek`, 
                         `jual`.`nama_bank`, `jual`.`no_rek`, `jual`.`no_telepon`, 
                         `jual`.`nama_barang`, `jual`.`harga_barang`, 
                         `kategori_gender`.`nama_kategori_gender`, 
                         `kategori_item`.`nama_kategori_item`, 
                         `jual`.`deskripsi`, `jual`.`image` 
                   FROM `jual` 
                   JOIN `kategori_gender` 
                   ON `kategori_gender`.`id_kategori_gender`=`jual`.`id_kategori_gender` 
                   JOIN`kategori_item` 
                   ON `kategori_item`.`id_kategori_item`=`jual`.`id_kategori_item`
                  ";
        
        return $this->db->query($query)->result_array();

    }
}
