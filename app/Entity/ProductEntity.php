<?php

namespace App\Entity;

use Core\Entity\Entity;

class ProductEntity extends Entity
{

    public function getUrl()
    {
        return 'index.php?p=products.show&id=' . $this->ID;
    }

    public function getDescription()
    {
        $html = '<p>' . substr($this->Desc, 0, 150) . '...</p>';
        return  $html;
    }
}
