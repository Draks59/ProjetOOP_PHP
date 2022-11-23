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

    public function show()
    {
        $products = $this->Product->findWithCategory($_GET['id']);
        if ($products === false) {
            $this->notFound();
        }
        $this->render('products.show', compact('products'));
    }
}
