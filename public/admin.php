<?php

use Core\Auth\DBAuth;

define('ROOT',dirname(__DIR__));
require ROOT . '/app/App.php';
App::load();

if (isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home';
}

// AUTH 
$app = App::getInstance();
$auth = new DBAuth($app->getDb());
if (!$auth->logged()){
    $app->forbidden();
}


ob_start();
switch ($p) {
    case 'home':
        require ROOT . '/pages/admin/products/index.php';
        break;
    case 'menu':
        require ROOT . '/pages/admin/products/menu.php';
        break;
    case 'products.show':
        require ROOT . '/pages/admin/products/show.php';
        break;
    case 'products.category':
        require ROOT . '/pages/admin/products/category.php';
        break;

}
$content = ob_get_clean();
require ROOT . '/pages/templates/default.php';