<?php
use App\Controller\admin\AppController;
use App\Controller\Admin\CategoriesController;
use App\Controller\admin\ProductsController;
use Core\Controller\Controller;

define('ROOT',dirname(__DIR__));
require ROOT . '/app/App.php';
App::load();

if (isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home';
}

switch ($p) {

    default:
        $controller = new App\Controller\AppController();
        $controller->index();
        break;

    case 'menu':
        $controller = new \App\Controller\ProductsController();
        $controller->index();
        break;

    case 'products.show':
        $controller = new \App\Controller\ProductsController();
        $controller->show();
        break;

    case 'products.category':
        $controller = new \App\Controller\ProductsController();
        $controller->category();
        break;

    case 'locate':
        $controller = new \App\Controller\LocateController();
        $controller->index();
        break;  

    case 'contact':
        $controller = new \App\Controller\ContactController();
        $controller->index();
        break;   

    case 'login':
        $controller = new \App\Controller\UsersController();
        $controller->login();
        break;      

    case '404':
        $controller = new Controller();
        $controller->notFound();
        break;

    case 'admin.index':
        $controller = new AppController();
        $controller->index();
        break;

    case 'admin.products.index':
        $controller = new ProductsController();
        $controller->index();
        break;

    case 'admin.products.add':
        $controller = new ProductsController();
        $controller->create();
        break;
        
    case 'admin.products.edit':
        $controller = new ProductsController();
        $controller->update();
        break;

    case 'admin.products.delete':
        $controller = new ProductsController();
        $controller->delete();
        break;

    case 'admin.categories.index':
        $controller = new CategoriesController();
        $controller->index();
        break;

    case 'admin.categories.add':
        $controller = new CategoriesController();
        $controller->create();
        break;

    case 'admin.categories.edit':
        $controller = new CategoriesController();
        $controller->update();
        break;

    case 'admin.categories.delete':
        $controller = new CategoriesController();
        $controller->delete();
        break;
}