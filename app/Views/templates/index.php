<main class="container">
    <div class="row">
        <h1 class="text-center">SITE VITRINE</h1>
    </div>
    <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner col-6">
                <?php foreach ($photos as $key => $photo) {
                    if ($key === array_key_first($photos)) { ?>
                        <div class="carousel-item active">
                            <div class="d-flex justify-content-center">
                                <img class="w-25" src="assets/img/biere/<?= $photo->name ?>" class="d-block w-100" alt="photo de <?= $photo->name ?>">
                            </div>
                        </div>
                    <?php
                    } else { ?>
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center">
                                <img class="w-25" src="assets/img/biere/<?= $photo->name ?>" class="d-block w-100" alt="photo de <?= $photo->name ?>">
                            </div>
                        </div>

                <?php }
                } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span>Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="row mt-3 mb-3">
        <h1 class="text-center">Horaires</h1>
    </div>
    <div class="row text-center">
        <h5> Lundi : Fermé</h5>
        <h5> Mardi : 10h00 - 22h00</h5>
        <h5> Mercredi : 10h00 - 22h00</h5>
        <h5> Jeudi : 10h00 - 22h00</h5>
        <h5> Vendredi : 14h00 - 02h00</h5>
        <h5> Samedi : 14h00 - 02h00</h5>
        <h5> Dimanche : 14h00 - 22h00</h5>
    </div>
    <div class="text-center mt-3">
        <p>Site Vitrine, c'est l'histoire de rencontre entre passionnés de bonnes mousses. Au service de nos clients, les chopistes, nous nous occupons de dénicher, pour vous, les bières qui vous plairont, avec pour objectif de vous les proposer au meilleur prix. Site Vitrine, c'est aussi un décor, une ambiance et de la qualité. Nos équipes s'engagent à ce que les bières soient toujours servies à la température idéale, pour que vous en profitiez dans un cadre unique qui fait l'essence de l'ambiance de site vitrine.</p>
    </div>
</main>