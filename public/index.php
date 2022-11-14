<?php
define('ROOT',dirname(__DIR__));
require ROOT . '/app/App.php';
App::load();

if (isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home';
}

ob_start();
switch ($p) {
    case 'home':
        require ROOT . '/templates/home.php';
        break;
    case 'menu':
        require ROOT . '/templates/menu.php';
        break;
    case 'products.show':
        require ROOT . '/templates/products/show.php';
        break;
    case 'products.category':
        require ROOT . '/templates/products/category.php';
        break;
    case 'locate':
        require ROOT . '/templates/locate.php';
        break;  
    case 'contact':
        require ROOT . '/templates/contact.php';
        break;                
    case '404':
        require ROOT . '/templates/404.php';
        break;
}
$content = ob_get_clean();
require ROOT . '/templates/default.php';