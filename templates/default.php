<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fichier css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">        
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- fichier js -->
    <script src="assets/js/jquery-3.6.1.min.js" defer></script>
    <script src="assets/js/bootstrap.bundle.js" defer></script>        
    <script src="assets/js/scripts.js" defer></script>
    <title><?= App::getInstance()->title; ?></title>
  </head>
  <body>
    <?php require '../templates/_partials/_nav.html'; ?>
        <div class="starter-template">
          <?= $content; ?>  
        </div>
    <?php 
      require '../templates/_partials/_footer.html';
      require '../templates/_partials/_popup.html';
     ?>
  </body>
</html>