<?php 
namespace Core\Table;
use Core\Database\Database;
use Core\Database\MysqlDatabase;

 class Table{

    protected $table;
    protected $db;

    public function __construct(MysqlDatabase $db)
    {
        $this->db = $db;
        if (is_null($this->table)){
            
            $parts = explode('\\', get_class($this));
            $class_name = end($parts);
            $this->table = strtolower(str_replace('Table', '', $class_name));
        }
    }
    
    public function find($id){
        return $this->query("
            SELECT *
            FROM " . $this->table ."
            WHERE Id = ?
            ", [$id], true);
    }

    public function query($statement, $attributes = null, $one = false){
        
        if ($attributes){
            return $this->db->prepare($statement, $attributes, str_replace('Table', 'Entity', get_class($this)), $one);
        }
        else{
            return $this->db->query($statement, str_replace('Table', 'Entity', get_class($this)), $one);
        }
    }

    public function all(){
        return $this->query("
            SELECT *
            FROM " . $this->table ."");
    }

 }
