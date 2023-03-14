function getXhr() {
  var xhr = null;
  if (window.XMLHttpRequest)
    // Firefox et autres
    xhr = new XMLHttpRequest();
  else if (window.ActiveXObject) {
    // Internet Explorer
    try {
      xhr = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
      xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
  } else {
    // XMLHttpRequest non supporté par le navigateur
    alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest");
    xhr = false;
  }
  return xhr;
}

/*
 * Méthode qui sera appelée sur le click du bouton envoyer
 */
function envoyerMessage(message, envoyeur) {
  if (!checkFormsNonVides()){
    return -1;
  }
  var xhr = getXhr();
  // On défini ce qu'on va faire quand on aura la réponse
  xhr.onreadystatechange = function () {
    //Traitement seulement si on a tout reçu et que la réponse est ok
    if (xhr.readyState == 4 && xhr.status == 200) {
      console.log("ajax ok");
    }
  };
  xhr.open(
    "GET",
    "enregistrer.php?auteur=" + envoyeur + "&contenu=" + message,
    true
  );
  xhr.send(null);
}

function checkFormsNonVides(){
  let champMessage = document.getElementById('champMessage');
  let champPseudo = document.getElementById('champPseudo');
  let form = champMessage.parentNode;
  let formName = form.name;
  if (estVide(champPseudo) || estVide(champMessage)){
    if (form.childNodes.length == 7){
      let err = document.createElement("span");
      err.innerHTML = "LE FORMULAIRE EST VIDE, VEUILLEZ LE REMPLIR";
      form.appendChild(err);
    }
    return false;
  } else {
    return true;
  }
}

function estVide(champ){
  if(champ.value == "") {
    return true;
  }
  for(i = 0; i < champ.value.length; i++) {
      if(champ.value[i] != ' '){
          return false;
      }
  }
  return true;
}