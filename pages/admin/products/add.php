<?php
$app = App::getInstance();
$productTable = $app->getTable('Product');
if(!empty($_POST)){
    $result = $productTable->update($_GET['ID'], [
        'Name' => $_POST['Name'],
        'Desc' => $_POST['Desc'],
        'Photo' => $_POST['Photo'],
        'Cat_ID' => $_POST['Cat_ID']
    ]);
    if($result){
        ?>
        <div class="alert alert-success">L'article a bien été ajouté</div>
        <?php
    }
}
$categories = $app->getTable('Category')->list('ID', 'Name');
$form = new \Core\HTML\BootstrapForm($_POST);
?>

<form method="post">
    <?= $form->input('Name', 'Nom du produit'); ?>
    <?= $form->input('Desc', 'Description du produit', ['type' => 'textarea']); ?>
    <?= $form->select('Cat_ID', 'Catégorie', $categories); ?>
    <?= $form->input('Photo', 'Photo du produit'); ?>
    <button class="btn btn-primary">Ajouter</button>
</form>