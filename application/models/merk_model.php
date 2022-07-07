<?php

class merk_model extends CI_Model{
    private $table = 'merk';
    public function get_data($table){
        return $this->db->get($this->table);
    } 

    public function findById($id){
        $this->db->where('id',$id);
        $query = $this->db->get($this->table);
        return $query->row();
    }
    public function save($data){
        $sql = "INSERT INTO merk (nama,produk)
            VALUES (?,?)";
        $this->db->query($sql,$data);
    }

    public function update($data, $where){
        $this->db->where($where);
        $this->db->update('merk', $data);
    }

    public function delete($id){
        $sql = "delete from merk where id=?";
        $this->db->query($sql,array($id));
    }

}
?>