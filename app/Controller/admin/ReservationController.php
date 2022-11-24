<?php

namespace App\Controller\Admin;

class ReservationController extends AppController
{

    public function index()
    {
        $this->render('admin.reservation.index');
    }
}
