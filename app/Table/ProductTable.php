<?php

namespace App\Table;

use Core\Table\Table;

class ProductTable extends Table
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
        SELECT products.ID, products.Name, products.Desc, products.Photo, categories.Name as categorie 
        FROM products
        LEFT JOIN categories 
            ON Cat_ID = categories.ID
        WHERE products.ID = ?
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
        SELECT products.ID, products.Name, products.Desc, products.Photo, categories.Name as categorie 
        FROM products
        LEFT JOIN categories 
            ON Cat_ID = categories.ID
        ");
    }
/**
 * I want to select all the products, and for each product, I want to select the category name, and I
 * want to order the results by category name.
 * 
 * @return An array of objects.
 */
    public function allByCategory()
    {
        return $this->query("
        SELECT products.ID, products.Name, products.Desc, products.Photo, categories.Name as categorie 
        FROM products
        LEFT JOIN categories 
            ON Cat_ID = categories.ID
        ORDER BY categorie
        ");
    }
/**
 * Select all the products, and the category name for each product, and return the result as an array
 * of objects.
 * 
 * @return The last product in the database.
 */
    public function last()
    {
        return $this->query("
        SELECT products.ID, products.Name, products.Desc, products.Photo, categories.Name as categorie 
        FROM products
        LEFT JOIN categories 
            ON Cat_ID = categories.ID
        ");
    }
/**
 * It returns the last product added to the database, by category
 * 
 * @param Cat_ID The ID of the category
 * 
 * @return The query is returning the ID, Name, Desc, Photo, and categorie of the products table.
 */
    public function lastByCategory($Cat_ID)
    {
        return $this->query("
        SELECT products.ID, products.Name, products.Desc, products.Photo, categories.Name as categorie 
        FROM products
        LEFT JOIN categories 
            ON Cat_ID = categories.ID
        WHERE Cat_ID = ?
        ", [$Cat_ID]);
    }
}
