<?php
class M_kategori_kelas_ekonomi extends CI_Model
{
    function get_kategori_kelas_ekonomi(){
        $hasil=$this->db->query("SELECT * FROM kategori_kelas_ekonomi");
        return $hasil->result_array();
    }

}