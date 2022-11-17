<?php
namespace App\Controller;

use \App;
use Core\Auth\DBAuth;

class UsersController extends AppController{

    public function login(){
        $success = false;
        if(!empty($_POST)){
            $auth = new DBAuth(App::getInstance()->getDb());
            if($auth->login($_POST['username'], $_POST['password'])){
                header('Location: index.php?p=admin.index');
            }
            else{
                $success = true;
            }
        }
        $form = new \Core\HTML\BootstrapForm($_POST);
        $this->render('users.login', compact('form', 'success'));
    }

}