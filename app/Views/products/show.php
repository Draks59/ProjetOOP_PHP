<section class="row">
    <div class="col-12">
        <h1><?= $products->name; ?></h1>
    </div>

    <div class="col-4 col-sm-6 col-md-6 col-lg-6">
        <div class="d-flex justify-content-center">
            <img class="w-20" src="<?= "./assets/img/biere/" . $products->photo ?>" class="d-block w-100" alt="img de <?= $products->photo ?>">
        </div>
    </div>
    <div class="col-8 col-sm-6 col-md-6 col-lg-6">
        <p>Categorie : <?= $products->categorie; ?></p>
        <p>Description : <?= $products->desc; ?> </p>
        <a href="javascript:history.go(-1)">Retour</a>
    </div>
</section>