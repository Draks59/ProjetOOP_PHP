<?php if ($result) : ?>
    <div class="alert alert-success">L'article a bien été edité</div>
<?php endif; ?>

<form method="post">
    <?= $form->input('Name', 'Nom du produit'); ?>
    <button class="btn btn-primary">Sauvegarder</button>
    <a href="index.php?p=admin.categories.index" class="btn btn-secondary">Retour au menu</a>
</form>