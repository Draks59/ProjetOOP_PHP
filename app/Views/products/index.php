<section class="row">
    <div class="col-12">
        <h2>Type de bière : </h2>
    </div>
    <?php foreach ($categories as $category) : ?>
        <div class="col-12 col-sm-6 col-lg-3 mt-2">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title"><?= $category->Name; ?></h5>
                    <a href="<?= $category->url; ?>" class="btn btn-primary">Voir les produits</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</section>