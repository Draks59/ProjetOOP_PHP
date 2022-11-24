<?php if ($error) : ?>
    <div class="alert alert-danger"> Identifiants incorrect</div>
<?php endif; ?>
<form action="#" method="post">
    <?= $form->input('username', 'Nom d\'utilisateur'); ?>
    <?= $form->input('password', 'Mot de passe', ['type' => 'password']); ?>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>