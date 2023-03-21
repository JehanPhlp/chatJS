import("../dependencies/jquery.js");

/*
 * Méthode qui sera appelée sur le click du bouton envoyer
 */
function envoyerMessage(message, envoyeur) {
  if (checkFormsNonVides()) {
    $.ajax({
      type: "GET",
      url: "src/enregistrer.php",
      data: "auteur=" + envoyeur + "&contenu=" + message
    });
  }
}

function checkFormsNonVides() {
  let champMessage = document.getElementById("champMessage");
  let champPseudo = document.getElementById("champPseudo");
  let form = champMessage.parentNode;
  if (estVide(champPseudo)) {
    alert('Le nom d\'utilisateur est vide, veuillez le remplir');
    return false;
  } else if (estVide(champMessage)) {
    alert('Le contenu du message est vide, veuillez le remplir');
    return false;
  } else {
    return true;
  }
}

function estVide(champ) {
  if (champ.value == "") {
    return true;
  }
  for (i = 0; i < champ.value.length; i++) {
    if (champ.value[i] != " ") {
      return false;
    }
  }
  return true;
}

function estMessageDoublon(message) {
  $.ajax({
    type: "GET",
    url: "src/enregistrer.php",
    data: "contenu=" + message,
    success: function() {
      return false;
    },
    failure: function() {
      alert('Le message est un doublon');
      return true;
    }
  });
}

/*function checkFormsNonVides() {
  let champMessage = document.getElementById("champMessage");
  let champPseudo = document.getElementById("champPseudo");
  let form = champMessage.parentNode;
  if (estVide(champPseudo) || estVide(champMessage)) {
    if (form.childNodes.length == 5) {
      let err = document.createElement("span");
      err.innerHTML = "LE FORMULAIRE EST VIDE, VEUILLEZ LE REMPLIR";
      form.appendChild(err);
    }
    return false;
  } else {
    return true;
  }
}*/