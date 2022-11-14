<?php 
namespace App\Table;
use Core\Table\Table;
class CategoriesTable extends Table{

    
    public function getUrl(){
        return 'index.php?p=categorie&id=' . $this->ID;
    }

}