<?php
$beer = App\App::getDb()->prepare('SELECT * FROM products WHERE ID =?',[$_GET['id']], 'App\Table\Article', true);
?>

<H1><?= $beer->Name; ?></H1>
<p><?= $beer->Desc; ?></p>
<a href="index.php?p=home">Retour au menu</a>