<?php

use App\Controller\AppController;

define('ROOT',dirname(__DIR__));
require ROOT . '/app/App.php';
App::load();

if (isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home';
}

switch ($p) {
    case 'home':
        $controller = new AppController();
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
        $controller = new AppController();
        $controller->index();
        break;
}