<section class="row">
    <div class="col-12 text-center">
        <h2>Catégorie</h2>
    </div>
    <?php foreach ($categories as $category) : ?>
        <div class="col-12 col-sm-6 col-lg-3 mt-2">
            <div class="card h-100 text-center">
                <div class="card-body">
                    <h5 class="card-title"><?= $category->name; ?></h5>
                    <a href="<?= $category->url; ?>" class="btn btn-primary mt-1">Voir les produits</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</section>