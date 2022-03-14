<?php
class M_status_verifikasi extends CI_Model
{
    function get_status_verifikasi(){
        $hasil=$this->db->query("SELECT * FROM status_verifikasi");
        return $hasil;
    }

}