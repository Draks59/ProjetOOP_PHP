<form id="formulaire" action="#" method="post">
    <?= $form->input('firstname', 'Prénom :', $required = true); ?>
    <?= $form->input('name', 'Nom :', $required = true); ?>
    <?= $form->input('phone', 'Numéro de telephone:', $required = true, ['type' => 'number']); ?>
    <?= $form->input('mail', 'E-mail :', $required = true, ['type' => 'email']); ?>
    <?= $form->input('date', 'Date :', $required = true, ['type' => 'datetime-local']); ?>
    <?= $form->input('nb', 'Nombre de personne :', $required = true, ['type' => 'number']); ?>
    <?= $form->input('message', 'Message :', $required = true, ['type' => 'textarea']); ?>
    <button class="btn btn-primary">Sauvegarder</button>
    <a href="index.php?p=admin.reservations.index" class="btn btn-secondary">Retour au menu</a>
</form>