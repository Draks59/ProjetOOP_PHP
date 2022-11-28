<section class="row">
    <H1>Administrer les produits</H1>
    <div>
        <a href="?p=admin.products.create" class="btn btn-success">Ajouter</a>
        <a href="?p=admin.photos.index" class="btn btn-info">Ajouter des photos</a>
        <form action="?p=admin.products.index" method="post">
            <?= $form->select('cat_id', 'Filtrer par catégorie', $categories, true); ?>
        </form>
        <a href="index.php?p=admin.products.index">Réinitialiser filtre</a>
    </div>
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
                        <a href="?p=admin.products.update&id=<?= $product->id ?>" class="btn btn-primary">Editer</a>
                        <form action="?p=admin.products.delete" method="post">
                            <input type="hidden" name="id" value="<?= $product->id ?>">
                            <button type="submit" class="btn btn-danger">Supprimer</a>
                        </form>
                    </td>
                    <td><?= $product->id ?></td>
                    <td><?= $product->name ?></td>
                    <td><?= $product->categorie ?></td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</section>