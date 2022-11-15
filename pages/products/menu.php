<div class="row">
    <div class="col-8">
        <?php


            foreach (App::getInstance()->getTable('Product')->last() as $product): ?>
            
            <h2><a href="<?= $product->url; ?>"><?= $product->Name; ?></a></h2>

            <h3> <?= $product->categorie;  ?></h3>

            <p> <?= $product->description;  ?></p>
            
            <?php endforeach; ?>

    </div>   
    <div class="col-4">
        <ul>
            <?php foreach (App::getInstance()->getTable('Category')->all() as $category): ?>
                
                <li><a href="<?= $category->url; ?>"><?= $category->Name; ?></a></li>
            
            <?php endforeach; ?>
        </ul>
    </div>
</div>