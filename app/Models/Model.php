<?php


namespace App\Models;

use App\Database;

abstract class Model {

    protected $id;

    private $db;
    protected $table = '';

    public function __construct(Database $db, $modeldata = []){
        $this->db = $db;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getById($id){
        return $this->getById($this->table, $id);
    }

    public function getAll(){
        return $this->db->getAll($this->table);
    }

    public function create($data){
        return $this->db->create($this->table, $data);
    }
}