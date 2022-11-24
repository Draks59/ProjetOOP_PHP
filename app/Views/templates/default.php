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
  <script src="assets/js/bootstrap.bundle.min.js" defer></script>
  <script src="assets/js/scripts.js" defer></script>
  <title><?= App::getInstance()->title; ?></title>
</head>

<body>
  <?php require ROOT . '/app/Views/templates/_partials/_nav.html'; ?>
  <div id="wrap">
    <div class="container mt-5" id="main">
      <?= $content; ?>
    </div>
  </div>
  <?php
  require ROOT . '/app/Views/templates/_partials/_popup.html';
  require ROOT . '/app/Views/templates/_partials/_footer.html';
  ?>
</body>

</html>