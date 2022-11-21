<section class="row">
    <div class="col-12">
        <h2>Liste des produits de la catégorie <?= $categorie->Name; ?></h2>
        <a href="index.php?p=products.index">Retour au menu</a>
    </div>
    <?php foreach ($products as $product): ?>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">
            <article class="card h-100">
                <div class="card-body">
                    <h2 class="card-title"><?= $product->Name; ?></h2>
                    <p class="card-text"><?= $product->description ?></p>
                    <a class="btn btn-primary mb-3" href="<?= $product->url; ?>">Voir les détails</a>
                </div>
            </article>
        </div>
    <?php endforeach ?>
</section>