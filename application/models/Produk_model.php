<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{
    public function getAllProduk()
    {
        $query = "SELECT `id_produk`, `product`.`name`,`product`.`harga`,`kategori_gender`.
        `nama_kategori_gender`,
        `kategori_item`.`nama_kategori_item`,`product`.`deskripsi`,`product`.`image_produk`
                  FROM `product`
                  JOIN `kategori_gender`
                  ON `kategori_gender`.`id_kategori_gender`=`product`.`id_kategori_gender`
                  JOIN `kategori_item`
                  ON `kategori_item`.`id_kategori_item`=`product`.`id_kategori_item`
                ";

        return $this->db->query($query)->result_array();
    }
}
