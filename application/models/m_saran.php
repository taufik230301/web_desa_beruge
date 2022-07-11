<?php
class m_saran extends CI_Model
{
    function get_saran(){
        $hasil=$this->db->query("SELECT * FROM saran");
        return $hasil;
    }

    public function insert_saran($nama, $email, $subject, $message){
        $this->db->trans_start();
        $this->db->query("INSERT INTO saran(nama, email, subject, message, created_at) VALUES ('$nama', '$email', '$subject', '$message', NOW())");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
       }

       public function delete_data_penduduk($id_saran){
        $this->db->trans_start();
        $this->db->query("DELETE FROM saran WHERE id_saran='$id_saran'");
        $this->db->trans_complete();
       if($this->db->trans_status()==true)
       return true;
       else
       return false;
    }

}