<?php
class M_kategori_bantuan extends CI_Model
{
    function get_kategori_bantuan(){
        $hasil=$this->db->query("SELECT * FROM kategori_bantuan");
        return $hasil;
    }



    public function insert_data_kategori_bantuan($kategori_bantuan){
        $this->db->trans_start();
        $this->db->query("INSERT INTO kategori_bantuan(kategori_bantuan) VALUES ('$kategori_bantuan')");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
       }

    public function update_data_kategori_bantuan($kategori_bantuan, $id_kategori_bantuan){
        $this->db->trans_start();
        $this->db->query("UPDATE kategori_bantuan SET kategori_bantuan='$kategori_bantuan' WHERE id_kategori_bantuan='$id_kategori_bantuan'");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
       }
}