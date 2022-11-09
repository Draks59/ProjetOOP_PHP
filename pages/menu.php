<div class="row">
    <div class="col-8">
        <?php

            foreach (\App\Table\Product::getLast() as $beer): ?>
            
            <h2><a href="<?= $beer->url; ?>"><?= $beer->Name; ?></a></h2>

            <h3> <?= $beer->categorie;  ?></h3>

            <p> <?= $beer->Description;  ?></p>
            
            <?php endforeach; ?>

    </div>   
    <div class="col-4">
        <ul>
            <?php foreach (\App\Table\Categorie::all() as $categorie): ?>
                
                <li><a href="<?= $categorie->url; ?>"><?= $categorie->Name; ?></a></li>
            
            <?php endforeach; ?>
        </ul>
    </div>
</div>