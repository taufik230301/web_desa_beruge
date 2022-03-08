<?php
class M_kegiatan extends CI_Model
{
    function get_kegiatan(){
        $hasil=$this->db->query("SELECT * FROM kegiatan");
        return $hasil;
    }

}