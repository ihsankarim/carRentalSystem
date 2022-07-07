<?php

class users_model extends CI_Model
{
        private $table = "users";

          public function get_data($table){
            return $this->db->get($this->table)->result();
          }

          public function login($uname,$pass)
          {
                    $sql = "SELECT * FROM users WHERE username=? and password=MD5(?)";
                    $data = [$uname,$pass];
                    $query = $this->db->query($sql, $data);
                    return $query->row();
          } 
          public function register($username,$password,$email,$role)
          {
                    $sql = " INSERT INTO users (id,username,password,email,created_at,last_login,status,role) 
                    VALUES(null,?,MD5(?),?,CURRENT_TIME(),CURRENT_TIME(),1,?);";
                    $data=[$username,$password,$email,$role];
                    $query=$this->db->query($sql,$data);
                    return $query;
          }

          public function findById($id){
            // SELECT * FROM mahasiswa WHERE nim=$id;
            $this->db->where('id',$id);
            $query = $this->db->get($this->table);
            return $query->row();
        }
    
        public function save($data){
          //   $sql = "INSERT INTO users (id,username,password,email,role) VALUES (?,?,MD5(?),?,?)";
          $sql = " INSERT INTO users (id,username,password,email,created_at,last_login,status,role) VALUES(null,?,MD5(?),?,CURRENT_TIME(),CURRENT_TIME(),1,?);";
            $this->db->query($sql,$data);
        }
    
        public function update($data, $where){
            $this->db->where($where);
            $this->db->update('users', $data);
        }
    
        public function delete($id){
            // DELETE FROM mahasiswa WHERE nim=$id;
            $sql = "delete from users where id=?";
            $this->db->query($sql,array($id));
        }

} 

?>