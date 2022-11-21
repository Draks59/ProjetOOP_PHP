<H1>Administrer les categories</H1>
<p>
    <a href="?p=admin.categories.create" class="btn btn-success">Ajouter</a>
</p>
<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nom</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($categories as $category): ?>

            <tr>
                <td><?= $category->ID ?></td>
                <td><?= $category->Name ?></td>
                <td><a href="?p=admin.categories.update&ID=<?= $category->ID?>" class="btn btn-primary">Editer</a></td>
                <td><a href="?p=admin.categories.delete&ID=<?= $category->ID?>" class="btn btn-danger">Supprimer</a></td>
            </tr>
        
        <?php endforeach;?>
    </tbody>
</table>
