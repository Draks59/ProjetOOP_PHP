<?php

namespace App\Controller;

use \App;

class ProductsController extends AppController
{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Product');
        $this->loadModel('Category');
    }

    public function index()
    {

        $products =  $this->Product->last();
        $categories = $this->Category->all();
        $this->render('products.index', compact('products', 'categories'));
    }

/**
 * It gets the category from the database, and if it doesn't exist, it calls the notFound() function.
 * If it does exist, it gets the products from the database, and then gets all the categories from the
 * database. Finally, it renders the category.php view, passing it the category, products, and
 * categories
 */
    public function category()
    {
        $categorie = $this->Category->find($_GET['id']);
        if ($categorie === false) {
            $this->notFound();
        }
        $products = $this->Product->lastByCategory($_GET['id']);
        $categories = $this->Category->all();
        $this->render('products.category', compact('categorie', 'products', 'categories'));
    }

/**
 * It takes the id of a product, finds the product with that id, and then renders the show view with
 * the product.
 */
    public function show()
    {
        $products = $this->Product->findWithCategory($_GET['id']);
        if ($products === false) {
            $this->notFound();
        }
        $this->render('products.show', compact('products'));
    }
}
