<?php
require '../app/Autoloader.php';
use App\Autoloader;

Autoloader::register();

if (isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home';
}

ob_start();
switch ($p) {
    case 'home':
        require '../pages/home.php';
        break;
    case 'menu':
        require '../pages/menu.php';
        break;
    case 'product':
        require '../pages/product.php';
        break;
    case 'categorie':
        require '../pages/categorie.php';
        break;
    case 'locate':
        require '../pages/locate.php';
        break;  
    case 'contact':
        require '../pages/contact.php';
        break;                
    case '404':
        require '../pages/404.php';
        break;
}
$content = ob_get_clean();
require '../pages/templates/default.php';