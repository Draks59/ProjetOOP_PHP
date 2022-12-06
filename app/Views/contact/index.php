<h1 class="d-flex justify-content-center">Contact</h1>
<h2 class="d-flex justify-content-center titre ">Pour plus d'information veuillez prendre contact</h2>
<div class="container-fluid w-50 ">
  <!-- Formulaire de contact -->
  <form id="formulaire" method="post" class="form-example">
  <?= $form->input('mail', 'E-mail : ', true,  ['type' => 'email']); ?>
  <?= $form->input('phone', 'Numéro de téléphone :', true); ?>
  <?= $form->input('firstname', 'Prénom :', true); ?>
  <?= $form->input('name', 'Nom :', true); ?>
  <?= $form->input('subject', 'Sujet :', true); ?>
  <?= $form->input('message', 'Message :', true,  ['type' => 'textarea']); ?>
  <button class="btn btn-primary">Envoyer</button>
  </form>
</div>