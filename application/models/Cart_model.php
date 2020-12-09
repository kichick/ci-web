<?php

class Cart_model extends CI_Model
{
    public function totalCart($id)
    {
        $result = $this->db->where('id_jual', $id)->limit(1)->get('jual');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return [];
        }
    }
}
