<H1>Administrer les produits</H1>
<p>
    <a href="?p=admin.products.create" class="btn btn-success">Ajouter</a>
</p>
<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nom</td>
            <td>
                <form method="post">
                    <?= $form->select('Cat_ID', 'Catégorie', $categories, true); ?>
                    
                </form>
            </td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($products as $product): ?>

            <tr>
                <td><?= $product->ID ?></td>
                <td><?= $product->Name ?></td>
                <td><?= $product->categorie ?></td>
                <td><a href="?p=admin.products.update&ID=<?= $product->ID?>" class="btn btn-primary">Editer</a></td>
                <td><a href="?p=admin.products.delete&ID=<?= $product->ID?>" class="btn btn-danger">Supprimer</a></td>
            </tr>
        
        <?php endforeach;?>
    </tbody>
</table>
