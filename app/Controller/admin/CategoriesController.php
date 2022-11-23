<?php

namespace App\Controller\Admin;

class CategoriesController extends AppController
{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Category');
    }

    public function index()
    {
        $categories =  $this->Category->all();
        $this->render('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        $result = '';
        $form = new \Core\HTML\BootstrapForm();
        if (!empty($_POST)) {
            $result = $this->Category->create([
                'Name' => $_POST['Name']
            ]);
        }
        $this->render('admin.categories.create', compact('result', 'form'));
    }

    public function update()
    {
        $result = '';
        if (!empty($_POST)) {
            $result = $this->Category->update($_GET['ID'], [
                'Name' => $_POST['Name'],
            ]);
        }
        $categories =  $this->Category->find($_GET['ID']);
        $form = new \Core\HTML\BootstrapForm($categories);
        $this->render('admin.categories.update', compact('result', 'form', 'categories'));
    }

    public function delete()
    {
        $result = '';
        $categories = $this->Category->find($_GET['ID']);
        $form = new \Core\HTML\BootstrapForm($categories);
        if (!empty($_POST)) {
            $result = $this->Category->delete([$_GET['ID']]);
        }
        $this->render('admin.categories.delete', compact('result', 'categories', 'form'));
    }
}
