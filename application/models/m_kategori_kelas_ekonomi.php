<?php
class M_kategori_kelas_ekonomi extends CI_Model
{
    function get_kategori_kelas_ekonomi(){
        $hasil=$this->db->query("SELECT * FROM kategori_kelas_ekonomi");
        return $hasil;
    }

    public function insert_data_kategori_kelas_ekonomi($kategori_kelas_ekonomi){
        $this->db->trans_start();
        $this->db->query("INSERT INTO kategori_kelas_ekonomi(kategori_kelas_ekonomi) VALUES ('$kategori_kelas_ekonomi')");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
       }

       public function update_data_kategori_kelas_ekonomi($kategori_kelas_ekonomi, $id_kategori_kelas_ekonomi){
        $this->db->trans_start();
        $this->db->query("UPDATE kategori_kelas_ekonomi SET kategori_kelas_ekonomi='$kategori_kelas_ekonomi' WHERE id_kategori_kelas_ekonomi='$id_kategori_kelas_ekonomi'");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
       }

}