<?php

use App\App;
use App\Table\Product;


$beer = Product::find($_GET['id']);
if ($beer === false){
    App::notFound();
}

App::setTitle('Page du produit : '. $beer->Name);
?>



<div class="row">
    <div class="col-8">
        
        <H1><?= $beer->Name; ?></H1>
        <p><em><?= $beer->categorie; ?></em></p>
        <p><?= $beer->Desc; ?></p>
        <a href="index.php?p=home">Retour au menu</a>

    </div>   
    <div class="col-4">
        <ul>
            <?php foreach (\App\Table\Categorie::all() as $categorie): ?>
                
                <li><a href="<?= $categorie->url; ?>"><?= $categorie->Name; ?></a></li>
            
            <?php endforeach; ?>
        </ul>
    </div>
</div>