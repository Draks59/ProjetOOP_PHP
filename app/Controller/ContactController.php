<?php

namespace App\Controller;

class ContactController extends AppController
{
    public function index()
    {
        $form = new \Core\HTML\BootstrapForm();
        $subject = '';
        $message = '';
        $mail = new \Core\Model\Mail();
        if (!empty($_POST)) {
            $mail->setFirstname($_POST['firstname']);
            $mail->setName($_POST['name']);
            $mail->setFrom($_POST['mail']);
            $mail->setSubject($_POST['subject']);
            $mail->setPhone($_POST['phone']);
            $message = wordwrap($_POST['message'], 70, "\r\n");
            $mail->setMessage($message);
            $mail->sendMail();

            $infos = $_POST;
            return $this->render('contact.done', compact('infos'));
        }

        $this->render('contact.index', compact('form'));
    }
}
