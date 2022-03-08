<?php
class M_kegiatan extends CI_Model
{
    function get_kegiatan(){
        $hasil=$this->db->query("SELECT * FROM kegiatan");
        return $hasil;
    }


public function insert_data_kegiatan($nama_kegiatan,  $foto_kegiatan, $keterangan, $tgl_kegiatan){
        $this->db->trans_start();
        $this->db->query("INSERT INTO kegiatan(nama_kegiatan,foto_kegiatan,keterangan ,tgl_kegiatan) VALUES ('$nama_kegiatan','$foto_kegiatan', '$keterangan', '$tgl_kegiatan')");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
       }
}