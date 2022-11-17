<?php if($result):?>
    <div class="alert alert-success">L'article a bien été edité</div>
<?php endif; ?>

<form method="post">
    <?= $form->input('Name', 'Nom du produit'); ?>
    <?= $form->input('Desc', 'Description du produit', ['type' => 'textarea']); ?>
    <?= $form->select('Cat_ID', 'Catégorie', $categories); ?>
    <?= $form->input('Photo', 'Photo du produit'); ?>
    <button class="btn btn-primary">Sauvegarder</button>
    <a href="index.php?p=admin.products.index" class="btn btn-secondary">Retour au menu</a>
</form>