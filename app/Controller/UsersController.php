<?php
namespace App\Controller;

use Core\Controller\Controller;

class UsersController extends AppController{

    public function login(){
        $this->render('users.login');
    }

}