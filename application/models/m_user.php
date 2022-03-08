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

    public function cek_user($username,$password){
        $hasil=$this->db->query("SELECT * FROM user WHERE username='$username' AND password='$password' ");
        return $hasil;
    }

    public function get_user_penduduk(){
        $hasil=$this->db->query("SELECT * FROM user 
        JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail
        JOIN rt ON user_detail.id_rt = rt.id_rt
        JOIN kategori_kelas_ekonomi ON user_detail.id_kategori_kelas_ekonomi = kategori_kelas_ekonomi.id_kategori_kelas_ekonomi
        JOIN kategori_bantuan ON user_detail.id_kategori_bantuan = kategori_bantuan.id_kategori_bantuan
        WHERE user.id_user_level = 4
        ");
        return $hasil;
       }

    public function insert_data_penduduk($username, $password, $nama, $email, $no_hp, $id_user_level, $nik, $tempat_lahir, $tgl_lahir, $alamat, $jenis_kelamin, $pekerjaan, $id_rt, $id_kategori_bantuan, $id_kategori_kelas_ekonomi, $keterangan){
        $this->db->trans_start();
        $this->db->query("INSERT INTO user(username,password,email ,no_hp ,id_user_level, id_user_detail) VALUES ('$username','$password','$email','$no_hp','$id_user_level',autoInc())");
       $this->db->query("INSERT INTO user_detail(nama,nik,tempat_lahir ,tgl_lahir ,alamat, jenis_kelamin, pekerjaan, id_rt, id_kategori_bantuan, id_kategori_kelas_ekonomi, keterangan) VALUES ('$nama', '$nik', '$tempat_lahir', '$tgl_lahir', '$alamat', '$jenis_kelamin', '$pekerjaan', '$id_rt', '$id_kategori_bantuan', '$id_kategori_kelas_ekonomi', '$keterangan')");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
       }

   

        public function update_data_penduduk($username, $password, $nama, $email, $no_hp, $id_user_level, $nik, $tempat_lahir, $tgl_lahir, $alamat, $jenis_kelamin, $pekerjaan, $id_rt, $id_kategori_bantuan, $id_kategori_kelas_ekonomi, $keterangan, $id){
            $this->db->trans_start();
            $this->db->query("UPDATE user SET username='$username',  password='$password',  email='$email',  no_hp='$no_hp'  WHERE id='$id'");
            $this->db->query("UPDATE user_detail SET nama='$nama',  nik='$nik',  tempat_lahir='$tempat_lahir',  tgl_lahir='$tgl_lahir',  alamat='$alamat',  jenis_kelamin='$jenis_kelamin',  pekerjaan='$pekerjaan', id_rt='$id_rt', id_kategori_bantuan='$id_kategori_bantuan', id_kategori_kelas_ekonomi='$id_kategori_kelas_ekonomi', id_kategori_kelas_ekonomi='$id_kategori_kelas_ekonomi', keterangan='$keterangan' WHERE id_user_detail='$id'");
            $this->db->trans_complete();
            if($this->db->trans_status()==true)
                return true;
            else
                return false;
           }

}
