<?php

namespace App\Entity;

use Core\Entity\Entity;

class ProductEntity extends Entity
{

    /**
     * It returns the URL of the product page for the current product
     * 
     * @return The URL of the product.
     */
    public function getUrl()
    {
        return 'index.php?p=products.show&id=' . $this->ID;
    }

    /**
     * It returns the first 150 characters of the description.
     * 
     * @return The first 150 characters of the description.
     */
    public function getDescription()
    {
        $html = '<p>' . substr($this->Desc, 0, 150) . '...</p>';
        return  $html;
    }
}
