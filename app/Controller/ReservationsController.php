<?php

namespace App\Controller;

class ReservationsController extends AppController
{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Reservation');
    }
    public function index()
    {
        $form = new \Core\HTML\BootstrapForm();
        if (!empty($_POST)) {
            $this->Reservation->create([
                'name' => $_POST['name'],
                'firstname' => $_POST['firstname'],
                'phone' => $_POST['phone'],
                'mail' => $_POST['mail'],
                'date' => $_POST['date'],
                'nb' => $_POST['nb'],
                'message' => $_POST['message']
            ]);
            $infos = $_POST;
            return $this->render('reservations.done', compact('infos'));
        }

         $this->render('reservations.index', compact('form'));
    }
}
