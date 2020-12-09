
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
                         `checkout`.`notes`, `checkout`.`image_out`,
                         `checkout`.`payment_status`, `jual`.`id_jual`,`jual`.`nama_barang`,
                          `jual`.`harga_barang`,`jual`.`qty`,`jual`.`image` 
                  FROM `checkout` 
                  JOIN `jual` 
                  ON `jual`.`id_jual` = `checkout`.`id_checkout`
                  ";
        return $this->db->query($query)->result_array();
    }
}
