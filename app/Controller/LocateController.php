<?php

namespace App\Controller;

class LocateController extends AppController
{

    public function index()
    {
        $form = new \Core\HTML\BootstrapForm();
        $this->render('locate.index', compact('form'));
    }
}
