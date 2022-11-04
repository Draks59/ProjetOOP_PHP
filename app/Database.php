<?php
namespace App;

use \PDO;
class Database{

    private $db_name;
    private $db_user;
    private $db_pwd;
    private $db_host;
    private $pdo;

    public function __construct($db_name, $db_user = 'root', $db_pwd = 'toor', $db_host = 'localhost')
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pwd = $db_pwd;
        $this->db_host = $db_host;  
    }

    private function getPDO()
    {
        $pdo = new PDO('mysql:dbname=blog;host=127.0.0.1', 'root', 'toor');
        $this->pdo = $pdo;
        return $pdo;
    }

    public function query($statement){
        $req = $this->getPDO()->query($statement);
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
}