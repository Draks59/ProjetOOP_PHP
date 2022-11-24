<?php if ($result) : ?>
    <div class="alert alert-success">La categorie <?= $_POST['Name']; ?> a bien été ajouté</div>
<?php endif; ?>

<form method="post">
    <?= $form->input('Name', 'Nom de la categorie'); ?>
    <button class="btn btn-primary">Ajouter</button>
    <a href="index.php?p=admin.categories.index" class="btn btn-secondary">Retour au menu</a>
</form>