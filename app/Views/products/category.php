<h1> <?= $categorie->Name; ?> </h1>
<div class="row">
    <div class="col-8">
        <?php foreach ($products as $product): ?>

            <h2><a href="<?= $product->url; ?>"><?= $product->Name; ?></a></h2>
            <p><?= $product->description ?></p>

        <?php endforeach ?>
    </div>
    <div class="col-4">
        <ul>
            <?php foreach ($categories as $category): ?>
                
                <li><a href="<?= $category->url; ?>"><?= $category->Name; ?></a></li>
            
            <?php endforeach; ?>
        </ul>
    </div>
</div>