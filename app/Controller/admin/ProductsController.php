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

    public function update()
    {
        $result = '';
        if (!empty($_POST)) {
            $result = $this->Product->update($_GET['ID'], [
                'Name' => $_POST['Name'],
                'Desc' => $_POST['Desc'],
                'Photo' => $_POST['Photo'],
                'Cat_ID' => $_POST['Cat_ID']
            ]);
        }
        $products =  $this->Product->find($_GET['ID']);
        $categories = $this->Category->list('ID', 'Name');
        $form = new \Core\HTML\BootstrapForm($products);
        $this->render('admin.products.update', compact('products', 'result', 'form', 'categories'));
    }

    public function delete()
    {
        $result = '';
        $product = $this->Product->find($_GET['ID']);
        $form = new \Core\HTML\BootstrapForm($product);
        if (!empty($_POST)) {
            $result = $this->Product->delete([$_GET['ID']]);
        }
        $this->render('admin.products.delete', compact('result', 'product', 'form'));
    }
}
