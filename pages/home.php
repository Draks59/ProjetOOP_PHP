<?php foreach (\App\Table\Article::getLast() as $beer):  ?>
    
    <h2><a href="<?= $beer->url ?>"><?= $beer->Name ?></a></h2>
    
    <p> <?= $beer->Description; ?></p>

<?php endforeach; ?>