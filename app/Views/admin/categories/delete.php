<?php if ($result) : ?>
    <div class="alert alert-success">La categorie <?= $_POST['Name'] ?> a bien été supprimé</div>
<?php endif;

if ($categories) : ?>

    <form method="post">
        <?= $form->input('Name', 'Nom de la categorie'); ?>
        <button class="btn btn-danger">Supprimer</button>
    <?php endif; ?>
    <a href="index.php?p=admin.categories.index" class="btn btn-secondary">Retour au menu</a>
    </form>