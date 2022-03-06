<?php
class M_kategori_bantuan extends CI_Model
{
    function get_kategori_bantuan(){
        $hasil=$this->db->query("SELECT * FROM kategori_bantuan");
        return $hasil->result_array();
    }

}