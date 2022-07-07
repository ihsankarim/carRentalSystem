<?php

class mobil_model extends CI_Model{

    private $table = "mobil";
    public function get_data($table){
        $query = $this->db->get($this->table);
        return $query->result();
    } 

    public function findById($id){
        // SELECT * FROM mahasiswa WHERE nim=$id;
        $this->db->where('id',$id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save($data){
        $sql = "INSERT INTO mobil (id,nopol,warna,biaya_sewa,deskripsi,cc,tahun,merk_id,foto) VALUES (?,?,?,?,?,?,?,?,?)";
        $this->db->query($sql,$data);
    }

    public function update($data, $where){
        $this->db->where($where);
        $this->db->update('mobil', $data);
    }

    public function delete($id){
        // DELETE FROM mahasiswa WHERE nim=$id;
        $sql = "delete from mobil where id=?";
        $this->db->query($sql,array($id));
    }


}
?>

<!-- <?php

// class Sewa_model extends CI_Model{

//     private $table = "mobil";

//     public function get_data($table){
//         return $this->db->get($this->table)->result();

//     } 

//     public function findById($id){
//         // SELECT * FROM mahasiswa WHERE nim=$id;
//         $this->db->where('id',$id);
//         $query = $this->db->get($this->table);
//         return $query->row();
//     }

//     public function save($data){
//         $sql = "INSERT INTO sewa (id,tanggal_mulai,tanggal_akhir,tujuan,noktp,users_id,mobil_id) VALUES (?,?,?,?,?,?,?)";
//         $this->db->query($sql,$data);
//     }

//     public function update($data, $where){
//         $this->db->where($where);
//         $this->db->update('sewa', $data);
//     }

//     public function delete($id){
//         // DELETE FROM mahasiswa WHERE nim=$id;
//         $sql = "delete from sewa where id=?";
//         $this->db->query($sql,array($id));
//     }

// }
?> -->