<?php
$app = App::getInstance();
$productTable = $app->getTable('Product');
if(!empty($_POST)){
    $result = $productTable->create([
        'Name' => $_POST['Name'],
        'Desc' => $_POST['Desc'],
        'Photo' => $_POST['Photo'],
        'Cat_ID' => $_POST['Cat_ID']
    ]);

    $categories = $app->getTable('Category')->list('ID', 'Name');
    $form = new \Core\HTML\BootstrapForm();

    if($result){
        ?>
        <div class="alert alert-success">L'article <?= $_POST['Name']; ?> dans la categorie <?= $categories->Name; ?> a bien été ajouté</div>
        <?php
    }
}
?>

<form method="post">
    <?= $form->input('Name', 'Nom du produit'); ?>
    <?= $form->input('Desc', 'Description du produit', ['type' => 'textarea']); ?>
    <?= $form->select('Cat_ID', 'Catégorie', $categories); ?>
    <?= $form->input('Photo', 'Photo du produit'); ?>
    <button class="btn btn-primary">Ajouter</button>
    <a href="admin.php" class="btn btn-secondary">Retour au menu</a>
</form>