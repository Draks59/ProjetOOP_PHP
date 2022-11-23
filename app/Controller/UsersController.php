<?php

namespace App\Controller;

use \App;
use Core\Auth\DBAuth;

class UsersController extends AppController
{

    public function login()
    {
        $error = false;
        if (!empty($_POST)) {
            $auth = new DBAuth(App::getInstance()->getDb());
            if ($auth->login($_POST['username'], $_POST['password'])) {
                header('Location: index.php?p=admin.app.index');
            } else {
                $error = true;
            }
        }
        $form = new \Core\HTML\BootstrapForm($_POST);
        $this->render('users.login', compact('form', 'error'));
    }

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
