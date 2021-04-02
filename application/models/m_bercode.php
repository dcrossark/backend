<?php

class M_bercode extends CI_Model
{
    public function get_data()
    {
        return $this->db->get('account')->result_array();
    }
}
