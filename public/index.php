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
        require ROOT . '/pages/home.php';
        break;
    case 'menu':
        require ROOT . '/pages/menu.php';
        break;
    case 'product':
        require ROOT . '/pages/product.php';
        break;
    case 'categorie':
        require ROOT . '/pages/categorie.php';
        break;
    case 'locate':
        require ROOT . '/pages/locate.php';
        break;  
    case 'contact':
        require ROOT . '/pages/contact.php';
        break;                
    case '404':
        require ROOT . '/pages/404.php';
        break;
}
$content = ob_get_clean();
require ROOT . '/pages/templates/default.php';