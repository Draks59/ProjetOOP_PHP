<?php
$app = App::getInstance();
$productTable = $app->getTable('Product');
if(!empty($_POST)){
    $result = $productTable->delete([$_GET['ID']]);
    if($result){
        ?>
        <div class="alert alert-success">L'article <?= $_POST['Name'] ?> a bien été supprimé</div>
        <?php
    }
}
$product = $productTable->find($_GET['ID']);
if ($product){


    $form = new \Core\HTML\BootstrapForm($product);

?>

<form method="post">
    <?= $form->input('Name', 'Nom du produit'); ?>
    <?= $form->input('Desc', 'Description du produit', ['type' => 'textarea']); ?>
    <?= $form->input('Cat_ID', 'Catégorie'); ?>
    <?= $form->input('Photo', 'Photo du produit'); ?>
    <button class="btn btn-danger">Supprimer</button>
    <?php } ?>
    <a href="admin.php" class="btn btn-secondary">Retour au menu</a>
</form>