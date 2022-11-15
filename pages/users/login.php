<?php

use Core\Auth\DBAuth;

if(!empty($_POST)){
    $auth = new DBAuth(App::getInstance()->getDb());
    if($auth->login($_POST['username'], $_POST['password'])){
        header('Location: admin.php');
    }
    else{
        ?>
        <div class="alert alert-danger"> Identifiants incorrect</div>
        <?php
    }
}
$form = new \Core\HTML\BootstrapForm($_POST);

?>

<form action="#" method="post">
    <?= $form->input('username', 'Nom d\'utilisateur'); ?>
    <?= $form->input('password', 'Mot de passe', ['type' => 'password']); ?>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>