<?php
namespace App\Controller;

use Core\Controller\Controller;

class ContactController extends AppController{

    public function index(){

        $this->render('contact.index');
    }

}