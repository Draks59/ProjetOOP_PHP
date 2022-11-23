<?php

namespace App\Controller;

use Core\Controller\Controller;

class LegalController extends AppController
{

    public function index()
    {
        $this->render('legal.index');
    }
}
