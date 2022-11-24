<?php

namespace App\Controller;

use \App;
use Core\Auth\DBAuth;

class UsersController extends AppController
{

    /**
     * If the user is logged in, redirect to the admin page. If the user is not logged in, check if the
     * user has submitted a login form. If the user has submitted a login form, check if the user is logged
     * in. If the user is logged in, redirect to the admin page. If the user is not logged in, display an
     * error message.
     */
    public function login()
    {
        $error = false;
        $auth = new DBAuth(App::getInstance()->getDb());
        $user = $auth->logged();
        if ($user) {
            header('Location: index.php?p=admin.app.index');
        }
        if (!empty($_POST)) {
            if ($auth->login($_POST['username'], $_POST['password'])) {
                header('Location: index.php?p=admin.app.index');
            } else {
                $error = true;
            }
        }
        $form = new \Core\HTML\BootstrapForm($_POST);
        $this->render('users.login', compact('form', 'error'));
    }

    /**
     * It destroys the session and redirects the user to the index page.
     */
    public function logout()
    {
        $auth = new DBAuth(App::getInstance()->getDb());
        $auth = $auth->getUserId();
        if ($auth) {
            session_destroy();
            header('Location: index.php?p=app.index');
        }
    }
}
