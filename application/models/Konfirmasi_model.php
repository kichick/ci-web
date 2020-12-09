<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konfirmasi_model extends CI_Model
{
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');

        $name_buy = $this->input->post('name_buy');
        $province = $this->input->post('province');
        $address = $this->input->post('address');
        $regency = $this->input->post('regency');
        $disctrict = $this->input->post('disctrict');
        $village = $this->input->post('village');
        $zip = $this->input->post('zip');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $notes = $this->input->post('notes');

        $konfirmasi = array(
            'name_buy' => $name_buy,
            'province' => $province,
            'address' => $address,
            'regency' => $regency,
            'disctrict' => $disctrict,
            'village' => $village,
            'zip' => $zip,
            'email' => $email,
            'phone' => $phone,
            'notes' => $notes,
            'tgl_pesan' => date('Y-m-d H:i:s'),
            'tgl_bayar' => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),
            'status_pembayaran' => '0'
        );
        $this->db->insert('checkout', $konfirmasi);
        $id_checkout = $this->db->insert_id();

        foreach ($this->cart->contents() as $item) {
            $data = array(
                'id_checkout'   => $id_checkout,
                'id_jual'       => $item['id'],
                'nama_barang'   => $item['name'],
                'harga_barang'  => $item['price'],
                'qty'           => $item['qty'],
                'image'         => $item['image']
            );
            $this->db->insert('pesanan', $data);
        }
        return true;
    }

    public function tampil_data()
    {
        $result = $this->db->get('checkout');
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return false;
        }
    }

    public function ambil_id_konfirmasi($id_checkout)
    {
        $result = $this->db->where('id_checkout', $id_checkout)->limit(1)->get('checkout');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    public function ambil_id_pesanan($id_checkout)
    {
        $result = $this->db->where('id_checkout', $id_checkout)->get('pesanan');
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return false;
        }
    }


    public function getAllKonfirmasi()
    {
        $query = "SELECT * FROM `checkout`
                ";
        return $this->db->query($query)->result_array();
    }

    public function getKonfirmasiById($id)
    {
        return $this->db->get_where('checkout', ['id_checkout' => $id])->row_array();
    }
}
