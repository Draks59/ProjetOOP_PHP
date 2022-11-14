<?php 
namespace Core\Table;
use Core\Database\Database;
use Core\Database\MysqlDatabase;

 class Table{

    protected $table;
    protected $db;

    public function __construct(MysqlDatabase $db,)
    {
        $this->db = $db;
        if (is_null($this->table)){
            
            $parts = explode('\\', get_class($this));
            $class_name = end($parts);
            $this->table = strtolower(str_replace('Table', '', $class_name));
        }
    }
    
    public function find($id){
        return $this->db->query("
            SELECT *
            FROM " . $this->table ."
            WHERE Id = ?
            ", [$id], true);
    }

    public function query($statement, $attributes = null, $one = false){
        
        if ($attributes){
            return $this->db->prepare($statement, $attributes, get_called_class(), $one);
        }
        else{
            return $this->db->query($statement, get_called_class(), $one);
        }
    }

    public function all(){
        return $this->db->query("
            SELECT *
            FROM " . $this->table ."");
    }

    public function __get($key){
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;

    }
 }
