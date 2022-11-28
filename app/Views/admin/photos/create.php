<form method="post" action="index.php?p=admin.photos.create" enctype="multipart/form-data">
    <?= $form->input('image', '', false,  ['type' => 'file']); ?>
    <?= $form->input('image_text', 'Description du produit', false,  ['type' => 'textarea']); ?>
    <button class="btn btn-primary">Ajouter</button>
    <a href="index.php?p=admin.photos.index" class="btn btn-secondary">Retour au menu</a>
</form>