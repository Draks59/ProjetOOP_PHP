<?php 
namespace App\Table;
use Core\Table\Table;
 class ProductsTable extends Table{

    protected $db;

    public function find($id){
        return $this->db->query("
        SELECT products.ID, products.Name, products.Desc, products.Photo, categories.Name as categorie 
        FROM products
        LEFT JOIN categories 
            ON Cat_ID = categories.ID
        WHERE products.ID = ?
        ", [$id], true);
    }
    public function getLast(){
        return $this->db->query("
        SELECT products.ID, products.Name, products.Desc, products.Photo, categories.Name as categorie 
        FROM products
        LEFT JOIN categories 
            ON Cat_ID = categories.ID
        ");
    }
    public function LastByCategory($Cat_ID){
        return $this->db->query("
        SELECT products.ID, products.Name, products.Desc, products.Photo, categories.Name as categorie 
        FROM products
        LEFT JOIN categories 
            ON Cat_ID = categories.ID
        WHERE Cat_ID = ?
        ", [$Cat_ID]);
    }

    public function getUrl(){
        return 'index.php?p=product&id=' . $this->ID;
    }

    public function getDescription(){
        $html = '<p>' . substr($this->Desc, 0, 150) . '...</p>';
        $html .= '<p><a href="'. $this->getURL() . '">Voir la suite</a></p>';
        return  $html;
    }

    

}
