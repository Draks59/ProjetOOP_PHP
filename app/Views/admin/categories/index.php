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
                    <a href="?p=admin.categories.update&id=<?= $category->id ?>" class="btn btn-primary">Editer</a>
                    <form action="?p=admin.categories.delete" method="post">
                        <input type="hidden" name="id" value="<?= $category->id ?>">
                        <button type="submit" class="btn btn-danger">Supprimer</a>
                    </form>
                </td>
                <td><?= $category->id ?></td>
                <td><?= $category->name ?></td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>