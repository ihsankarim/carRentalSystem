<?php

class jenis_model extends CI_Model{

    public function get_data($table){
        return $this->db->get($table);
    } 

    public function save($data){
        $sql = "INSERT INTO jenis_perawatan (nama)
            VALUES (?)";
        $this->db->query($sql,$data);
    }

}
?>