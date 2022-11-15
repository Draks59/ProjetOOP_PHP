<?php
namespace Core\Database;

use App;
use \PDO;
class MySqlDatabase extends Database {

    private $db_name;
    private $db_user;
    private $db_pwd;
    private $db_host;
    private $pdo;
    private static $_instance;

    public function __construct($db_name, $db_user = 'root', $db_pwd = 'toor', $db_host = 'localhost')
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pwd = $db_pwd;
        $this->db_host = $db_host;  
    }

    public static function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    public function getPDO()
    {
            $pdo = new PDO('mysql:dbname='. $this->db_name .';host='. $this->db_host, $this->db_user, $this->db_pwd, array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
            $this->pdo = $pdo;
            return $pdo;
    }

    public function query($statement, $class_name = null, $one = false){
        $req = $this->getPDO()->query($statement);
        if(
            strpos($statement, 'UPDATE') === 0 ||
            strpos($statement, 'INSERT') === 0 ||
            strpos($statement, 'DELETE') === 0 
        ){

            return $req;
        }
        if($class_name === null){
            $req->setFetchMode(PDO::FETCH_OBJ);
        }else {
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        }
        if($one){
            $data = $req->fetch();
        }else{
            $data = $req->fetchAll();
        }
        return $data;
    }

    public function prepare($statement, $attributes, $class_name = null, $one = false){
        $req = $this->getPDO()->prepare($statement);
        $res = $req->execute($attributes);
        if(
            strpos($statement, "UPDATE") === 0 ||
            strpos($statement, "INSERT") === 0 ||
            strpos($statement, "DELETE") === 0 
        ){
            
            return $res;
        }
        if($class_name === null){
            $req->setFetchMode(PDO::FETCH_OBJ);
        }else {
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        }

        if($one){
            $data = $req->fetch();
        }else{
            $data = $req->fetchAll();
        }
        return $data;
    }
}