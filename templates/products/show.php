<?php
$app = App::getInstance();
$beer = $app->getTable('Product')->find($_GET['id']);
if ($beer === false){
    $app->notFound();
}

$app->title = $beer->Name;
?>



<div class="row">
    <div class="col-8">
        
        <H1><?= $beer->Name; ?></H1>
        <p><em><?= $beer->categorie; ?></em></p>
        <p><?= $beer->Desc; ?></p>
        <a href="javascript:history.go(-1)">Retour</a>

    </div>   
    <div class="col-4">
        <ul>
            <?php foreach (App::getInstance()->getTable('Category')->all() as $categorie): ?>
                
                <li><a href="<?= $categorie->url; ?>"><?= $categorie->Name; ?></a></li>
            
            <?php endforeach; ?>
        </ul>
    </div>
</div>