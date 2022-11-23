<?php

namespace App\Controller;

use Core\Controller\Controller;

class ReservationController extends AppController
{

    public function index()
    {
        $this->render('reservation.index');
    }
}
