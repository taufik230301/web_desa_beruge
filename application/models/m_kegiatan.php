<?php
class M_kegiatan extends CI_Model
{
    function get_kegiatan(){
        $hasil=$this->db->query("SELECT * FROM kegiatan JOIN user ON kegiatan.id_penulis = user.id ");
        return $hasil;
    }


public function insert_data_kegiatan($nama_kegiatan,  $foto_kegiatan, $keterangan, $tgl_kegiatan, $id_penulis){
        $this->db->trans_start();
        $this->db->query("INSERT INTO kegiatan(nama_kegiatan,foto_kegiatan,keterangan ,tgl_kegiatan, id_penulis, created_at) VALUES ('$nama_kegiatan','$foto_kegiatan', '$keterangan', '$tgl_kegiatan', '$id_penulis', NOW())");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
       }
}