<?php
class M_kegiatan extends CI_Model
{
    function get_kegiatan(){
        $hasil=$this->db->query("SELECT * FROM kegiatan JOIN user ON kegiatan.id_penulis = user.id ");
        return $hasil;
    }

    function get_kegiatan_by_id($id){
        $hasil=$this->db->query("SELECT * FROM kegiatan JOIN user ON kegiatan.id_penulis = user.id WHERE id_kegiatan='$id'");
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

       public function edit_data_kegiatan($nama_kegiatan,  $foto_kegiatan, $keterangan, $tgl_kegiatan, $id){
        $this->db->trans_start();
        $this->db->query("UPDATE kegiatan SET nama_kegiatan='$nama_kegiatan',  foto_kegiatan='$foto_kegiatan',  keterangan='$keterangan',  tgl_kegiatan='$tgl_kegiatan' WHERE id_kegiatan='$id'");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
       }

       
       public function delete_data_kegiatan($id){
        $this->db->trans_start();
        $this->db->query("DELETE FROM kegiatan WHERE id_kegiatan='$id'");
        $this->db->trans_complete();
       if($this->db->trans_status()==true)
       return true;
       else
       return false;
    }

    function get_total_kegiatan(){
        $hasil=$this->db->query("SELECT COUNT(id_kegiatan) as total_kegiatan FROM kegiatan");
        return $hasil;
}
}