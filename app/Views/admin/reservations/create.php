<form method="post">
    <?= $form->input('firstname', 'Prénom :'); ?>
    <?= $form->input('name', 'Nom :'); ?>
    <?= $form->input('phone', 'Numéro de telephone:', ['type' => 'tel']); ?>
    <?= $form->input('mail', 'E-mail :', ['type' => 'email']); ?>
    <?= $form->input('date', 'Date :', ['type' => 'datetime-local']); ?>
    <?= $form->input('nb', 'Nombre de personne :', ['type' => 'number']); ?>
    <?= $form->input('message', 'Message :', ['type' => 'textarea']); ?>
    <button class="btn btn-primary">Ajouter</button>
    <a href="index.php?p=admin.reservations.index" class="btn btn-secondary">Retour au menu</a>
</form>