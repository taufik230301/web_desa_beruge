<?php
class M_user extends CI_Model
{

    public function pendaftaran_user($username,  $email, $no_hp, $password, $id_user_level){
        $this->db->trans_start();
       $this->db->query("INSERT INTO user(username,password,email ,no_hp ,id_user_level, id_user_detail) VALUES ('$username','$password','$email','$no_hp','$id_user_level',autoInc())");
       $this->db->query("INSERT INTO user_detail(nama,nik,tempat_lahir ,tgl_lahir ,alamat, jenis_kelamin, pekerjaan, id_rt, id_kategori_bantuan, id_kategori_kelas_ekonomi, keterangan) VALUES (null, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, NULL)");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }   

    function cek_user($username,$password){
        $hasil=$this->db->query("SELECT * FROM user WHERE username='$username' AND password='$password' ");
        return $hasil;
    }

    function get_user_penduduk(){
        $hasil=$this->db->query("SELECT * FROM user 
        JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail
        JOIN rt ON user_detail.id_rt = rt.id_rt
        JOIN kategori_kelas_ekonomi ON user_detail.id_kategori_kelas_ekonomi = kategori_kelas_ekonomi.id_kategori_kelas_ekonomi
        JOIN kategori_bantuan ON user_detail.id_kategori_bantuan = kategori_bantuan.id_kategori_bantuan
        WHERE user.id_user_level = 4
        ");
        return $hasil;
       }

}