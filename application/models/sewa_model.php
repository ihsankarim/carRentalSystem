<?php

class Sewa_model extends CI_Model{

    private $table = "sewa";

    public function get_data($table){
        return $this->db->get($this->table)->result();
    } 

    public function findById($id){
        // SELECT * FROM mahasiswa WHERE nim=$id;
        $this->db->where('id',$id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save($data){
        $sql = "INSERT INTO sewa (tanggal_mulai,tanggal_akhir,tujuan,noktp,users_id,mobil_id) VALUES (?,?,?,?,?,?)";
        $this->db->query($sql,$data);
    }

    public function update($data, $where){
        $this->db->where($where);
        $this->db->update('sewa', $data);
    }

    public function delete($id){
        // DELETE FROM mahasiswa WHERE nim=$id;
        $sql = "delete from sewa where id=?";
        $this->db->query($sql,array($id));
    }

}
?>