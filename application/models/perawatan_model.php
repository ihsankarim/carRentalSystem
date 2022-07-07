<?php

class perawatan_model extends CI_Model{
    private $table = 'perawatan';
    public function get_data($table){
        return $this->db->get($this->table);
    } 

    public function findById($id){
        $this->db->where('id',$id);
        $query = $this->db->get($this->table);
        return $query->row();
    }
    public function save($data){
        $sql = "INSERT INTO perawatan (tanggal,biaya,km_mobil,deskripsi,mobil_id,jenis_perawatan_id)
            VALUES (?,?,?,?,?,?)";
        $this->db->query($sql,$data);
    }

    public function update($data, $where){
        $this->db->where($where);
        $this->db->update('perawatan', $data);
    }

    public function delete($id){
        $sql = "delete from perawatan where id=?";
        $this->db->query($sql,array($id));
    }

}
?>