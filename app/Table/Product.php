<?php 
namespace App\Table;
 class Product extends Table {

    public static function find($id){
        return self::query("
        SELECT products.ID, products.Name, products.Desc, products.Photo, categories.Name as categorie 
        FROM products
        LEFT JOIN categories 
            ON Cat_ID = categories.ID
        WHERE products.ID = ?
        ", [$id], true);
    }
    public static function getLast(){
        return self::query("
        SELECT products.ID, products.Name, products.Desc, products.Photo, categories.Name as categorie 
        FROM products
        LEFT JOIN categories 
            ON Cat_ID = categories.ID
        ");
    }
    public static function LastByCategory($Cat_ID){
        return self::query("
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
