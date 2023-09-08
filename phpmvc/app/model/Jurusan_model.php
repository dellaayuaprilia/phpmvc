<?php

class jurusan_model 
{
    private $table =  'jurusan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllBlog()
    {
        $this->db->query("SELECT * FROM " .$this->table);
        return $this->db->resultAll();
    }
    public function getBlogById($id)
    {
        $this->db->query("SELECT * FROM " .$this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }
    public function tambahData($data)
    {
        $query = " INSERT INTO jurusan VALUES ('', :nama) ";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataJurusan($id)
    {
        $query = "DELETE FROM jurusan WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
    
}