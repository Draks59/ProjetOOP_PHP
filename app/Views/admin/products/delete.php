<?php if ($result) : ?>
    <div class="alert alert-success">L'article <?= $_POST['Name'] ?> a bien été supprimé</div>
<?php endif;

if ($product) : ?>

    <form method="post">
        <?= $form->input('Name', 'Nom du produit'); ?>
        <?= $form->input('Desc', 'Description du produit', ['type' => 'textarea']); ?>
        <?= $form->input('Photo', 'Photo du produit'); ?>
        <button class="btn btn-danger">Supprimer</button>
    <?php endif; ?>
    <a href="index.php?p=admin.products.index" class="btn btn-secondary">Retour au menu</a>
    </form>