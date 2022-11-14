<?php 
namespace App\Entity;

use Core\Entity\Entity;

class ProductEntity extends Entity {

    public function getUrl(){
        return 'index.php?p=products.show&id=' . $this->ID;
    }

    public function getDescription(){
        $html = '<p>' . substr($this->Desc, 0, 150) . '...</p>';
        $html .= '<p><a href="'. $this->getURL() . '">Voir la suite</a></p>';
        return  $html;
    }

}