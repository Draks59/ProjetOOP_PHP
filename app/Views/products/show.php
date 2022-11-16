<div class="row">
    <div class="col-8">
        
        <H1><?= $products->Name; ?></H1>
        <p><em><?= $products->categorie; ?></em></p>
        <p><?= $products->Desc; ?></p>
        <a href="javascript:history.go(-1)">Retour</a>

    </div>   
    <div class="col-4">
        <ul>
            <?php foreach ($categories as $category): ?>
                
                <li><a href="<?= $category->url; ?>"><?= $category->Name; ?></a></li>
            
            <?php endforeach; ?>
        </ul>
    </div>
</div>