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
    public function create($fields){
        $sql_parts = [];
        $attributes = [];
        foreach($fields as $k => $v){
            $sql_parts[] = "`$k` = ?";
            $attributes[] = $v;
        }
        $sql_part = implode(', ', $sql_parts);
        return $this->db->prepare("INSERT {$this->table} SET $sql_part", $attributes);
    }    
    
    public function delete($id){

        return $this->db->prepare("DELETE FROM {$this->table} WHERE ID =?", $id);
    }
    
    public function update($id, $fields){
        $sql_parts = [];
        $attributes = [];
        foreach($fields as $k => $v){
            $sql_parts[] = "`$k` = ?";
            $attributes[] = $v;
        }
        $attributes[]= $id;
        $sql_part = implode(', ', $sql_parts);
        return $this->db->prepare("UPDATE {$this->table} SET $sql_part WHERE ID =?", $attributes);
    }

    public function list($key, $value){
        $records = $this->all();
        $return = [];
        foreach($records as $v){
            $return[$v->$key] = $v->$value;
        }
        return $return;
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
