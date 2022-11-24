<?php
define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';
App::load();

/* Checking if the url has a parameter called p. If it does, it sets the variable  to the value of
the parameter. If it doesn't, it sets the variable  to 'App.index'. */
if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'App.index';
}

/* This is the router. It takes the url and splits it into an array. It then checks if the first
element of the array is 'admin'. If it is, it sets the controller to the admin controller. If it
isn't, it sets the controller to the normal controller. It then sets the action to the second
element of the array. It then creates a new instance of the controller and calls the action. */

$p = explode('.', $p);
if ($p[0] == 'admin') {
    if (count($p) < 3) {
        die('not_Found');
    }
    $controller = '\App\Controller\Admin\\' . ucfirst($p[1]) . 'Controller';
    $action = $p[2];
} else {
    if (count($p) < 2) {
        die('not_Found');
    }
    $controller = '\App\Controller\\' . ucfirst($p[0]) . 'Controller';
    $action = $p[1];
}

$controller = new $controller();
$controller->$action();
