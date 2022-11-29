<?php

namespace App\Model;

use Core\Model\Table;

class ProductModel extends Table
{

    protected $table = "products";

    /**
     * It returns the product with the ID passed in parameter, and the name of the category it belongs to
     * 
     * @param id the id of the product we want to find
     * 
     * @return The query is returning the ID, Name, Desc, Photo, and categorie of the product.
     */
    public function findWithCategory($id)
    {
        return $this->query("
        SELECT products.id, products.name, products.desc, photos.name as photo, categories.name as categorie 
        FROM products
        LEFT JOIN categories 
            ON cat_id = categories.id
        LEFT JOIN photos
            ON photo_id = photos.id
        WHERE products.id = ?
        ", [$id], true);
    }

    /**
     * Select all the products, and for each product, select the name of the category it belongs to.
     * 
     * @return An array of objects.
     */
    public function allWithCategory()
    {
        return $this->query("
        SELECT products.id, products.name, products.desc, photos.name as photo, categories.name as categorie 
        FROM products
        LEFT JOIN categories 
            ON cat_id = categories.id
        LEFT JOIN photos
            ON photo_id = photos.id
        ");
    }

    /**
     * It returns all the products that have the same category ID as the one passed in the function
     * 
     * @param cat_ID the category ID
     * 
     * @return The query method returns an array of objects.
     */
    public function allByCategory($cat_ID)
    {
        return $this->query("
        SELECT products.id, products.name, products.desc, photos.name as photo, categories.name as categorie 
        FROM products
        LEFT JOIN categories 
            ON cat_id = categories.id
        LEFT JOIN photos
            ON photo_id = photos.id
        WHERE cat_id = ?
        ", [$cat_ID]);
    }
}
