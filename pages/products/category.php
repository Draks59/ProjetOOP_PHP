<?php
$app = App::getInstance();
$category = $app->getTable('Category')->find($_GET['id']);
if($category === false){
    $app->notFound();
}
$products = $app->getTable('Product')->lastByCategory($_GET['id']);
$app->title = $category->Name;
?>

<h1> <?= $category->Name; ?> </h1>
<div class="row">
    <div class="col-8">
        <?php foreach ($products as $product): ?>
            <h2><a href="<?= $product->url; ?>"><?= $product->Name; ?></a></h2>
            <p><?= $product->description ?></p>
        <?php endforeach ?>
    </div>
    <div class="col-4">
        <ul>
            <?php foreach (App::getInstance()->getTable('Category')->all() as $categories): ?>
                
                <li><a href="<?= $categories->url; ?>"><?= $categories->Name; ?></a></li>
            
            <?php endforeach; ?>
        </ul>
    </div>
</div>