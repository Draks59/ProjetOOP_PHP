<?php 
$products = App::getInstance()->getTable('product')->all();
?>
<H1>Administrer les produits</H1>
<p>
    <a href="?p=products.add" class="btn btn-success">Ajouter</a>
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
        <?php foreach($products as $product): ?>

            <tr>
                <td><?= $product->ID ?></td>
                <td><?= $product->Name ?></td>
                <td><a href="?p=products.edit&ID=<?= $product->ID?>" class="btn btn-primary">Editer</a></td>
            </tr>
        
        <?php endforeach;?>
    </tbody>
</table>
