<form method="post">
    <?= $form->input('name', 'Nom du produit'); ?>
    <?= $form->input('desc', 'Description du produit', false,  ['type' => 'textarea']); ?>
    <?= $form->select('cat_id', 'Catégorie', $categories); ?>
    <?= $form->select('photo_id', 'Photo', $photos); ?>
    <button class="btn btn-primary">Ajouter</button>
    <a href="index.php?p=admin.products.index" class="btn btn-secondary">Retour au menu</a>
</form>