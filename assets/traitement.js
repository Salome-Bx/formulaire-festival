// vérification champs formulaire

let champsNom = document.querySelector("#nom");
let champsPrenom = document.querySelector("#prenom");
let champsEmail = document.querySelector("#email");
let champsTelehone = document.querySelector("#telephone");
let champsAdresse = document.querySelector("#adressePostale");

let formulaire = document.querySelector("#inscription");

// function verification() {

// }

/**
 * Ecouteur d'évenement à la validation du formulaire avec le bouton "Réserver"
 *
 * @param   {[type]}  submit     bouton "Réserver"
 * @param   {[type]}  function   permet de vérifier la validité des informations entrées dans les champs
 * @param   {[type]}  evenement  clic du bouton  "Réserver"
 *
 */
formulaire.addEventListener("submit", function (evenement) {
  if (
    champsNom.value == "" ||
    champsPrenom.value == "" ||
    champsEmail.value == "" ||
    (champsTelehone.value == "" && champsAdresse.value == "")
  ) {
    evenement.preventDefault();
    document.querySelector(
      ".messageErreurChampsVides"
    ).innerText = `Merci de remplir tous les champs.`;
  } else if (isNaN(champsTelehone.value)) {
    evenement.preventDefault();
    document.querySelector(
      ".messageErreurChampsVides"
    ).innerText = `Merci de mettre un numéro de téléphone valide.`;
  }
  if (checkEmail(champsEmail.value) == false) {
    document.querySelector(
      ".messageErreurChampsVides"
    ).innerText = `Merci de mettre un email valide.`;
    evenement.preventDefault();
  }
});

/**
 * Vérifier conformité format email
 *
 * @param   {[string]}  email  récupère l'email entré par l'utilisateur
 *
 * @return  {[boolean]}  retourne true si l'email est conforme
 */
function checkEmail(email) {
  let re =
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}
