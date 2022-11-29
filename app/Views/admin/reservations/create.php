<form method="post">
    <?= $form->input('firstname', 'Prénom :'); ?>
    <?= $form->input('name', 'Nom :'); ?>
    <?= $form->input('phone', 'Numéro de telephone:'); ?>
    <?= $form->input('mail', 'E-mail :', true, ['type' => 'email']); ?>
    <?= $form->input('date', 'Date :', true, ['type' => 'datetime-local']); ?>
    <?= $form->input('nb', 'Nombre de personne :', true, ['type' => 'number']); ?>
    <?= $form->input('message', 'Message :', true, ['type' => 'textarea']); ?>
    <button class="btn btn-primary">Ajouter</button>
    <a href="index.php?p=admin.reservations.index" class="btn btn-secondary">Retour au menu</a>
</form>