<?php
class M_user extends CI_Model
{

    public function pendaftaran_user($username,  $email, $no_hp, $password, $id_user_level){
        $this->db->trans_start();
       $this->db->query("INSERT INTO user(username,password,email ,no_hp ,id_user_level, id_user_detail) VALUES ('$username','$password','$email','$no_hp','$id_user_level',autoInc())");
       $this->db->query("INSERT INTO user_detail(id_user_detail, nama,nik,tempat_lahir ,tgl_lahir ,alamat, jenis_kelamin, pekerjaan, id_rt, id_kategori_bantuan, id_kategori_kelas_ekonomi, keterangan) VALUES (autoInc_user_detail(), null, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, NULL)");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }   

    public function cek_user($username,$password){
        $hasil=$this->db->query("SELECT * FROM user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail WHERE username='$username' AND password='$password' ");
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

       public function get_user_penduduk_by_id($id){
        $hasil=$this->db->query("SELECT * FROM user 
        JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail
        JOIN rt ON user_detail.id_rt = rt.id_rt
        JOIN kategori_kelas_ekonomi ON user_detail.id_kategori_kelas_ekonomi = kategori_kelas_ekonomi.id_kategori_kelas_ekonomi
        JOIN kategori_bantuan ON user_detail.id_kategori_bantuan = kategori_bantuan.id_kategori_bantuan
        WHERE user.id_user_level = 4 AND user.id = '$id'
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

        public function update_data_penduduk($username, $password, $nama, $email, $no_hp, $id_user_level, $nik, $tempat_lahir, $tgl_lahir, $alamat, $jenis_kelamin, $pekerjaan, $id_rt, $id_kategori_bantuan, $id_kategori_kelas_ekonomi, $keterangan, $id, $id_user_detail){
            $this->db->trans_start();
            $this->db->query("UPDATE user SET username='$username',  password='$password',  email='$email',  no_hp='$no_hp'  WHERE id='$id'");
            $this->db->query("UPDATE user_detail SET nama='$nama',  nik='$nik',  tempat_lahir='$tempat_lahir',  tgl_lahir='$tgl_lahir',  alamat='$alamat',  jenis_kelamin='$jenis_kelamin',  pekerjaan='$pekerjaan', id_rt='$id_rt', id_kategori_bantuan='$id_kategori_bantuan', id_kategori_kelas_ekonomi='$id_kategori_kelas_ekonomi', id_kategori_kelas_ekonomi='$id_kategori_kelas_ekonomi', keterangan='$keterangan' WHERE id_user_detail='$id_user_detail'");
            $this->db->trans_complete();
            if($this->db->trans_status()==true)
                return true;
            else
                return false;
           }

        public function delete_data_penduduk($id, $id_user_detail){
            $this->db->trans_start();
            $this->db->query("DELETE FROM user WHERE id='$id'");
            $this->db->query("DELETE FROM user_detail WHERE id_user_detail='$id_user_detail'");
            $this->db->trans_complete();
           if($this->db->trans_status()==true)
           return true;
           else
           return false;
        }

        
    function get_penduduk(){
            $hasil=$this->db->query("SELECT COUNT(id_user_detail) as total_penduduk FROM user WHERE id_user_level=4");
            return $hasil;
    }
    function get_penduduk_bantuan_tunai_langsung(){
        $hasil=$this->db->query("SELECT COUNT(id_user_detail) as total_bantuan_tunai_langsung FROM user_detail WHERE id_kategori_bantuan=2");
        return $hasil;
    }

    function get_penduduk_bantuan_tunai_bupati(){
        $hasil=$this->db->query("SELECT COUNT(id_user_detail) as total_bantuan_tunai_bupati FROM user_detail WHERE id_kategori_bantuan=3");
        return $hasil;
    }

    function get_penduduk_mampu(){
        $hasil=$this->db->query("SELECT COUNT(id_user_detail) as total_penduduk_mampu FROM user_detail WHERE id_kategori_kelas_ekonomi=2");
        return $hasil;
    }

    function get_penduduk_tidak_mampu(){
        $hasil=$this->db->query("SELECT COUNT(id_user_detail) as total_penduduk_tidak_mampu FROM user_detail WHERE id_kategori_kelas_ekonomi=3");
        return $hasil;
    }

}
