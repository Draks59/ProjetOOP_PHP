<?php

namespace App\Entity;

use Core\Entity\Entity;

class CategoryEntity extends Entity
{

    /**
     * It returns the URL of the category.
     * 
     * @return The URL of the category.
     */
    public function getUrl()
    {
        return 'index.php?p=products.category&id=' . $this->ID;
    }
}
