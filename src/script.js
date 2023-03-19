import("../dependencies/jquery.js");

/*
 * Méthode qui sera appelée sur le click du bouton envoyer
 */
function envoyerMessage(message, envoyeur) {
  $.ajax({
    type: "GET",
    url: "src/enregistrer.php",
    data: "auteur=" + envoyeur + "&contenu=" + message
  });
}

function checkFormsNonVides() {
  let champMessage = document.getElementById("champMessage");
  let champPseudo = document.getElementById("champPseudo");
  let form = champMessage.parentNode;
  let formName = form.name;
  if (estVide(champPseudo) || estVide(champMessage)) {
    if (form.childNodes.length == 7) {
      let err = document.createElement("span");
      err.innerHTML = "LE FORMULAIRE EST VIDE, VEUILLEZ LE REMPLIR";
      form.appendChild(err);
    }
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