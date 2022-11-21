<?php 
namespace App\Table;
use Core\Table\Table;
 class ProductTable extends Table{

    protected $table = "products";

    public function findWithCategory($id){
        return $this->query("
        SELECT products.ID, products.Name, products.Desc, products.Photo, categories.Name as categorie 
        FROM products
        LEFT JOIN categories 
            ON Cat_ID = categories.ID
        WHERE products.ID = ?
        ", [$id], true);
    }

    public function allWithCategory(){
        return $this->query("
        SELECT products.ID, products.Name, products.Desc, products.Photo, categories.Name as categorie 
        FROM products
        LEFT JOIN categories 
            ON Cat_ID = categories.ID
        ");
    }
    public function allByCategory(){
        return $this->query("
        SELECT products.ID, products.Name, products.Desc, products.Photo, categories.Name as categorie 
        FROM products
        LEFT JOIN categories 
            ON Cat_ID = categories.ID
        ORDER BY categorie
        ");
    }
    public function last(){
        return $this->query("
        SELECT products.ID, products.Name, products.Desc, products.Photo, categories.Name as categorie 
        FROM products
        LEFT JOIN categories 
            ON Cat_ID = categories.ID
        ");
    }
    public function lastByCategory($Cat_ID){
        return $this->query("
        SELECT products.ID, products.Name, products.Desc, products.Photo, categories.Name as categorie 
        FROM products
        LEFT JOIN categories 
            ON Cat_ID = categories.ID
        WHERE Cat_ID = ?
        ", [$Cat_ID]);
    }
    
}
