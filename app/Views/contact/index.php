<h1 class="d-flex justify-content-center">Contact</h1>
<h2 class="d-flex justify-content-center titre ">Pour plus d'information veuillez prendre contact</h2>
<div class="container-fluid w-50 ">
  <!-- Formulaire de contact -->
  <form id="formulaire" method="post" class="form-example">
    <div class="form-group">
      <label for="email" class="y">E-mail :</label>
      <input type="email" class="form-control" placeholder="name@example.com" id="email" required>
    </div>

    <div class="form-group">
      <label for="phone" class="y">Numéro de téléphone :</label>
      <input type="text" class="form-control" id="phone" placeholder="0612345678">
    </div>

    <div class="form-group">
      <label for="prenom" class="y">Prénom :</label>
      <input type="text" class="form-control" id="prenom" placeholder="votre prénom" required>
    </div>

    <div class="form-group">
      <label for="nom" class="y">Nom :</label>
      <input type="text" class="form-control" id="nom" placeholder="votre nom" required>
    </div>

    <div class="form-group">
      <label for="textbox" class="y">Message :</label>
      <textarea required class="form-control" id="message" rows="3"></textarea>
    </div>

    <div class="d-flex justify-content-md-center mt-3"><button type="submit" class="btn btn-dark mb-2">Envoyer</button></div>
  </form>
</div>