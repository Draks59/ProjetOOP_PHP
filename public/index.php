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
        require ROOT . '/pages/templates/home.php';
        break;
    case 'menu':
        require ROOT . '/pages/products/menu.php';
        break;
    case 'products.show':
        require ROOT . '/pages/products/show.php';
        break;
    case 'products.category':
        require ROOT . '/pages/products/category.php';
        break;
    case 'locate':
        require ROOT . '/pages/locate/locate.php';
        break;  
    case 'contact':
        require ROOT . '/pages/contact/contact.php';
        break;   
    case 'login':
        require ROOT . '/pages/users/login.php';
        break;               
    case '404':
        require ROOT . '/pages/templates/404.php';
        break;
}
$content = ob_get_clean();
require ROOT . '/pages/templates/default.php';