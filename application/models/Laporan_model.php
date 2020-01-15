
<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Laporan_model extends CI_Model
{
    public function getAllLaporan()
    {
        $query = "SELECT `checkout`.`id_checkout`,`checkout`.`name_buy`,
                         `checkout`.`province`, `checkout`.`address`,
                         `checkout`.`address`,`checkout`.`regency`, 
                         `checkout`.`disctrict`,`checkout`.`village`,
                         `checkout`.`zip`, `checkout`.`email`,`checkout`.`phone`,
                         `checkout`.`notes`, `checkout`.`image_out`,`checkout`.`total_harga`,
                         `checkout`.`payment_status`, `product`.`id_produk`,`product`.`name`,
                         `product`.`harga`,`product`.`image_produk` 
                  FROM `checkout` 
                  JOIN `product` 
                  ON `product`.`id_produk` = `checkout`.`id_checkout`
                  ";
        return $this->db->query($query)->result_array();
    }
}