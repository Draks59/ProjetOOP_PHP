<H1>Administrer les produits</H1>
<p>
    <a href="?p=admin.products.create" class="btn btn-success">Ajouter</a>
<form method="post">
    <?= $form->select('Cat_ID', 'Filtrer par catégorie', $categories, true); ?>
</form>
<a href="index.php?p=admin.products.index">Réinitialiser filtre</a>
</p>
<table class="table">
    <thead>
        <tr>
            <td>Actions</td>
            <td>ID</td>
            <td>Nom</td>
            <td>Catégorie</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product) : ?>

            <tr>
                <td>
                    <a href="?p=admin.products.update&ID=<?= $product->ID ?>" class="btn btn-primary">Editer</a>
                    <a href="?p=admin.products.delete&ID=<?= $product->ID ?>" class="btn btn-danger">Supprimer</a>
                </td>
                <td><?= $product->ID ?></td>
                <td><?= $product->Name ?></td>
                <td><?= $product->categorie ?></td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>