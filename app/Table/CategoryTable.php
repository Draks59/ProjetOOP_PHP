<?php 
namespace App\Table;
use Core\Table\Table;
class CategoryTable extends Table{

    protected $table = "categories";
    
    public function getUrl(){
        return 'index.php?p=categorie&id=' . $this->ID;
    }

}