<div class="row">
    <div class="col-8">
        <?php


            foreach (App::getInstance()->getTable('Products')->GetLast() as $beer): ?>
            
            <h2><a href="<?= 123; ?>"><?= $beer->Name; ?></a></h2>

            <h3> <?= $beer->categorie;  ?></h3>

            <p> <?= $beer->Desc;  ?></p>
            
            <?php endforeach; ?>

    </div>   
    <div class="col-4">
        <ul>
            <?php foreach (App::getInstance()->getTable('Categories')->all() as $categorie): ?>
                
                <li><a href="<?= 123 ?>"><?= $categorie->Name; ?></a></li>
            
            <?php endforeach; ?>
        </ul>
    </div>
</div>