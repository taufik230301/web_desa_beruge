<?php
class m_rt extends CI_Model
{
    function get_rt(){
        $hasil=$this->db->query("SELECT * FROM rt");
        return $hasil;
    }

}