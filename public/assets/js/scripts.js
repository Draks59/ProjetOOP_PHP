// expression régulière pour verifier si c'est non vide
var regExpNonVide = /./;
// expression régulière pour verifier que les caractères entrés pour le nom et le prenom sont soit une lettre de l'alphabet en majuscule ou minuscule ou le tiret l'apostrophe ou le underscore
var regEXNomPrenomValide = /^[a-zA-Z\s\-\'_]+$/;
// expression régulière pour l'email valide decrite dans le support
var regExEmail = /^[a-z][a-z_0-9\.\-]+@[a-z_0-9\.\-]+\.[a-z]{2,3}$/;
// expression régulière qui accepete les chiffres de 0 à 9 et obligatoirement 10 fois
var regExTel = /^\d{10}$/;

// fonction saisie obligatoire pour certain champs qui prend en parametre l'input sur laquelle elle est lancée
function saisieObligatoire(inputDeclancheur) {
  let valeurAControler = inputDeclancheur.value.trim(); // Le trim supprime les espace en debut et en fin de chaine
  // Si mon champs est vide alors je previens l'utilisateur
  if (regExpNonVide.test(valeurAControler) == false) {
    // Message pour l'utilisateur
    console.log("ce champ nécessite une saisie obligatoire");
    // modification visuel de l'input pour laquelle il y a une erreur
    inputDeclancheur.style.border = "2px solid red";
    inputDeclancheur.setAttribute("placeholder", "ce champs est obligatoire");
    return false;
  } else {
    inputDeclancheur.style.border = "2px solid Green";
    return true;
  }
}
// fonction format Nom Prenom pour certain champs qui vérifie que la saisie n'a aucun caractères numériques
function formatNomPrenom(inputDeclancheur) {
  // Si mon champs est n'est pas vide je le contrôle
  if (inputDeclancheur.value != "") {
    if (regEXNomPrenomValide.test(inputDeclancheur.value) == false) {
      console.log("seuls les caractères alphanumériques sont autorisés");
      // modification visuel de l'input pour laquelle il y a une erreur
      inputDeclancheur.style.border = "2px solid Orange";
      inputDeclancheur.setAttribute(
        "placeholder",
        "caractères non numérique svp"
      );

      return false;
    } else {
      // modification visuel de l'input pour laquelle il y a une erreur
      inputDeclancheur.style.border = "2px solid Green";
      return true;
    }
  } else {
    return true;
  }
}

// fonction qui vérifie que la saisie est au format de l'adresse mail
function formatEmail(inputDeclancheur) {
  // Si mon champs est n'est pas vide je le contrôle
  if (inputDeclancheur.value != "") {
    if (regExEmail.test(inputDeclancheur.value) == false) {
      console.log("Votre adresse mail n'est pas valide");
      inputDeclancheur.style.border = "2px solid Orange";
      inputDeclancheur.value = "";
      inputDeclancheur.setAttribute("placeholder", "Email non valide");
      return false;
    } else {
      inputDeclancheur.style.border = "2px solid Green";
      return true;
    }
  } else {
    return true;
  }
}

function controleNumTel(inputDeclancheur) {
  // Si mon champs est n'est pas vide je le contrôle
  if (inputDeclancheur.value != "") {
    if (regExTel.test(inputDeclancheur.value) == false) {
      console.log(
        "Votre numéro de téléphone doit être composé de 10 chiffres."
      );
      inputDeclancheur.style.border = "2px solid Orange";
      inputDeclancheur.value = "";
      inputDeclancheur.setAttribute("placeholder", "Téléphone non valide");
      return false;
    } else {
      inputDeclancheur.style.border = "2px solid Green";
      return true;
    }
  } else {
    return true;
  }
}

function envoyerFormulaire() {
  // je verifie que mes champs obligatoires sont remplis grace à la valeur de mon return dans la fonction.

  if (
    saisieObligatoire(document.getElementById("name")) == false ||
    saisieObligatoire(document.getElementById("firstname")) == false ||
    saisieObligatoire(document.getElementById("mail")) == false ||
    saisieObligatoire(document.getElementById("phone")) == false ||
    formatNomPrenom(document.getElementById("name")) == false ||
    formatNomPrenom(document.getElementById("firstname")) == false ||
    formatEmail(document.getElementById("mail")) == false ||
    controleNumTel(document.getElementById("phone")) == false
  ) {
    window.alert("erreur dans le formulaire");
    return false;
  } else {
    return true;
  }
}

window.addEventListener("load", function () {
  "use strict";
  // application d'une fonction qui verifie la saisie obligatoire que l'on applique à tout les champs qui sont obligatoire

  document.getElementById("name").addEventListener("blur", function () {
    saisieObligatoire(this);
    formatNomPrenom(this);
  });
  document.getElementById("firstname").addEventListener("blur", function () {
    saisieObligatoire(this);
    formatNomPrenom(this);
  });

  document.getElementById("mail").addEventListener("blur", function () {
    formatEmail(this);
    saisieObligatoire(this);
  });

  document.getElementById("phone").addEventListener("blur", function () {
    controleNumTel(this);
  });

  document
    .getElementById("formulaire")
    .addEventListener("submit", function (e) {
      let etatFormulaire = envoyerFormulaire();
      if (!etatFormulaire) {
        //  etatFormulaire == False
        e.preventDefault(); // code qui permet de stoper le submit en cas d'erreur
      }
    });
});

jQuery(document).ready(function ($) {
  if (sessionStorage.getItem("advertOnce") !== "true") {
    $("#container_popup").show();
  } else {
    $("#container_popup").hide();
    $(".overlay-verify").hide();
  }

  $(".btn_oui").click(function () {
    sessionStorage.setItem("advertOnce", "true");
    $("#container_popup").hide();
    $(".overlay-verify").hide();
  });
});
