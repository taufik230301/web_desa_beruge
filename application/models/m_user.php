<?php
class M_user extends CI_Model
{

    public function pendaftaran_user($username,  $email, $no_hp, $password, $id_user_level){
        $hasil = $this->db->query("INSERT INTO user(username,password,email ,no_hp ,id_user_level, id_user_detail) VALUES ('$username','$password','$email','$no_hp','$id_user_level',autoInc())");
        return $hasil;
    }   


}