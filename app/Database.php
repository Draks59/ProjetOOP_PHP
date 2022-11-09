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
            $pdo = new PDO('mysql:dbname='. $this->db_name .';host='. $this->db_host, $this->db_user, $this->db_pwd, array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
            $this->pdo = $pdo;
            return $pdo;
    }

    public function query($statement, $class_name, $one = false){
        $req = $this->getPDO()->query($statement);
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);

        if($one){
            $data = $req->fetch();
        }else{
            $data = $req->fetchAll();
        }
        return $data;
    }

    public function prepare($statement, $attributes, $class_name, $one = false){
        $req = $this->getPDO()->prepare($statement);
        $req->execute($attributes);
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);

        if($one){
            $data = $req->fetch();
        }else{
            $data = $req->fetchAll();
        }
        return $data;
    }
}