<?php
$beer = App\App::getDb()->prepare('SELECT * FROM beer WHERE id =?',[$_GET['id']], 'App\Table\Article', true);
?>

<H1><?= $beer->name; ?></H1>
<p><?= $beer->desc; ?></p>
<a href="index.php?p=home">Retour au menu</a>