<?php

namespace App\Controller\Admin;

class ProductsController extends AppController
{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Product');
        $this->loadModel('Category');
    }

    /**
     * It displays a list of products, and if a category is selected, it displays only the products of that
     * category.
     */
    public function index()
    {
        if (!empty($_POST['Cat_ID'])) {
            $products =  $this->Product->lastByCategory($_POST['Cat_ID']);
        } else {
            $products =  $this->Product->allWithCategory();
        }
        $categories = $this->Category->list('ID', 'Name');
        $form = new \Core\HTML\BootstrapForm($_POST);
        $this->render('admin.products.index', compact('products', 'categories', 'form'));
    }

    /**
     * It creates a new product in the database.
     */
    public function create()
    {
        $result = '';
        $categories = $this->Category->list('ID', 'Name');
        $form = new \Core\HTML\BootstrapForm();
        if (!empty($_POST)) {
            $result = $this->Product->create([
                'Name' => $_POST['Name'],
                'Desc' => $_POST['Desc'],
                'Photo' => $_POST['Photo'],
                'Cat_ID' => $_POST['Cat_ID']
            ]);
        }
        $this->render('admin.products.create', compact('categories', 'result', 'form'));
    }

    /**
     * It takes the ID of a product from the URL, finds the product in the database, and if it exists, it
     * updates the product with the data from the form.
     * 
     * The first thing we do is to find the product in the database. If the product doesn't exist, we call
     * the notFound() method.
     * 
     * If the product exists, we check if the form has been submitted. If it has, we update the product
     * with the data from the form.
     * 
     * We then get the list of categories from the database, and we create a BootstrapForm object with the
     * data of the product.
     * 
     * Finally, we render the view
     */
    public function update()
    {
        $result = '';
        $product =  $this->Product->find($_GET['ID']);
        if ($product === false) {
            $this->notFound();
        }
        if (!empty($_POST)) {
            $result = $this->Product->update($_GET['ID'], [
                'Name' => $_POST['Name'],
                'Desc' => $_POST['Desc'],
                'Photo' => $_POST['Photo'],
                'Cat_ID' => $_POST['Cat_ID']
            ]);
        }
        $categories = $this->Category->list('ID', 'Name');
        $form = new \Core\HTML\BootstrapForm($product);
        $this->render('admin.products.update', compact('product', 'result', 'form', 'categories'));
    }

    /**
     * It deletes a product from the database.
     */
    public function delete()
    {
        $result = '';
        $product = $this->Product->find($_GET['ID']);
        if ($product === false) {
            $this->notFound();
        }
        $form = new \Core\HTML\BootstrapForm($product);
        if (!empty($_POST)) {
            $result = $this->Product->delete([$_GET['ID']]);
        }
        $this->render('admin.products.delete', compact('result', 'product', 'form'));
    }
}
