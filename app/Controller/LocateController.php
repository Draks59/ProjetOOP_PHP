<?php
namespace App\Controller;

use Core\Controller\Controller;

class LocateController extends AppController{

    public function index(){
        $this->render('locate.index');
    }

}