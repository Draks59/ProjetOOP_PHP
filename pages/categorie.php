<?php

use App\Table\Categorie;
use App\Table\Product;
use App\App;

$categorie = Categorie::find($_GET['id']);
if($categorie === false){
    App::notFound();
}
$products = Product::lastByCategory($_GET['id']);
$categories = Categorie::all();
App::setTitle('Page de la catégorie : '. $categorie->Name);
?>

<h1><?= $categorie->Name; ?></h1>
<div class="row">
    <div class="col-8">
        <?php foreach ($products as $product): ?>
            <h2><a href="<?= $product->url; ?>"><?= $product->Name; ?></a></h2>
            <p><?= $product->description ?></p>
        <?php endforeach ?>
    </div>
    <div class="col-4">
        <ul>
            <?php foreach (\App\Table\Categorie::all() as $categorie): ?>
                
                <li><a href="<?= $categorie->url; ?>"><?= $categorie->Name; ?></a></li>
            
            <?php endforeach; ?>
        </ul>
    </div>
</div>