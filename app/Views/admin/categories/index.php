<H1>Administrer les categories</H1>
<p>
    <a href="?p=admin.categories.create" class="btn btn-success">Ajouter</a>
</p>
<table class="table">
    <thead>
        <tr>
            <td>Actions</td>
            <td>ID</td>
            <td>Nom</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categories as $category) : ?>

            <tr>
                <td>
                    <a href="?p=admin.categories.update&ID=<?= $category->ID ?>" class="btn btn-primary">Editer</a>
                    <a href="?p=admin.categories.delete&ID=<?= $category->ID ?>" class="btn btn-danger">Supprimer</a>
                </td>
                <td><?= $category->ID ?></td>
                <td><?= $category->Name ?></td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>