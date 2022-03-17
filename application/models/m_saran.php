<?php
class M_saran extends CI_Model
{

    public function insert_saran($nama, $email, $subject, $message){
        $this->db->trans_start();
        $this->db->query("INSERT INTO saran(nama, email, subject, message, created_at) VALUES ('$nama', '$email', '$subject', '$message', NOW())");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
       }

}