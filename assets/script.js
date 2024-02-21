// début code Salome
// récupération des 3 blocs du formulaire
let blocReservation = document.querySelector("#reservation");

let blocOptions = document.querySelector("#options");
blocOptions.classList.add("hidden");

let blocCoordonnees = document.querySelector("#coordonnees");
blocCoordonnees.classList.add("hidden");

function suivant(blocACacher, blocAAfficher) {
  blocACacher.classList.add("hidden");
  blocAAfficher.classList.remove("hidden");
}

// fin code Salome

// code Aubin

let tarifreduit = document.querySelector("#tarifreduitRadio");
let pass1Jour = document.querySelector("#pass1jour");
let pass2Jour = document.querySelector("#pass2jours");
let pass3Jour = document.querySelector("#pass3jours");
let displayPass1Jour = document.querySelector("#pass1jourDate");
let displayPass2Jour = document.querySelector("#pass2joursDate");
let displayTarifReduit = document.querySelector("#tarifreduit");

tarifreduit.addEventListener("click", function () {
  console.log("ça marche");
  displayPass1Jour.classList.add("tarifHidden");
  displayPass2Jour.classList.add("tarifHidden");
  displayTarifReduit.classList.remove("tarifHidden");
});
pass1Jour.addEventListener("click", function () {
  console.log("ça marche");
  displayTarifReduit.classList.add("tarifHidden");
  displayPass2Jour.classList.add("tarifHidden");
  displayPass1Jour.classList.remove("tarifHidden");
});
pass2Jour.addEventListener("click", function () {
  console.log("ça marche");
  displayTarifReduit.classList.add("tarifHidden");
  displayPass1Jour.classList.add("tarifHidden");
  displayPass2Jour.classList.remove("tarifHidden");
});
pass3Jour.addEventListener("click", function () {
  console.log("ça marche");
});

// fin code Aubin

// début code Elodie

//Réservation
let pass1jour = document.querySelector("#pass1jour");
let pass2jours = document.querySelector("#pass2jours");
let pass3jours = document.querySelector("#pass3jours");

let choixJour1 = document.querySelector("#choixJour1");
let choixJour2 = document.querySelector("#choixJour2");
let choixJour3 = document.querySelector("#choixJour3");
let choixJour12 = document.querySelector("#choixJour12");
let choixJour23 = document.querySelector("#choixJour23");

pass1jour.addEventListener("change", () => {
  decocher(pass1jour, pass2jours);
  decocher(pass1jour, pass3jours);
});
pass2jours.addEventListener("change", () => {
  decocher(pass2jours, pass1jour);
  decocher(pass2jours, pass3jours);
});
pass3jours.addEventListener("change", () => {
  decocher(pass3jours, pass2jours);
  decocher(pass3jours, pass1jour);
});

choixJour1.addEventListener("change", () => {
  decocher(choixJour1, choixJour2);
  decocher(choixJour1, choixJour3);
});
choixJour2.addEventListener("change", () => {
  decocher(choixJour2, pass2jours);
  decocher(choixJour2, choixJour3);
});
choixJour3.addEventListener("change", () => {
  decocher(choixJour3, choixJour1);
  decocher(choixJour3, choixJour2);
});

choixJour12.addEventListener("change", () => {
  decocher(choixJour12, choixJour23);
});
choixJour23.addEventListener("change", () => {
  decocher(choixJour23, choixJour12);
});

//Option
let tenteNuit1 = document.querySelector("#tenteNuit1");
let tenteNuit2 = document.querySelector("#tenteNuit2");
let tenteNuit3 = document.querySelector("#tenteNuit3");
let tente3Nuits = document.querySelector("#tente3Nuits");

let vanNuit1 = document.querySelector("#vanNuit1");
let vanNuit2 = document.querySelector("#vanNuit2");
let vanNuit3 = document.querySelector("#vanNuit3");
let van3Nuits = document.querySelector("#van3Nuits");

let enfantsOui = document.querySelector("input[name=enfantsOui]");
let enfantsNon = document.querySelector("input[name=enfantsNon]");

tenteNuit1.addEventListener("change", () => {
  decocher(tenteNuit1, tente3Nuits);
});
tenteNuit2.addEventListener("change", () => {
  decocher(tenteNuit2, tente3Nuits);
});
tenteNuit3.addEventListener("change", () => {
  decocher(tenteNuit3, tente3Nuits);
});
tente3Nuits.addEventListener("change", () => {
  decocher(tente3Nuits, tenteNuit1);
  decocher(tente3Nuits, tenteNuit2);
  decocher(tente3Nuits, tenteNuit3);
});

vanNuit1.addEventListener("change", () => {
  decocher(vanNuit1, van3Nuits);
});
vanNuit2.addEventListener("change", () => {
  decocher(vanNuit2, van3Nuits);
});
vanNuit3.addEventListener("change", () => {
  decocher(vanNuit3, van3Nuits);
});
van3Nuits.addEventListener("change", () => {
  decocher(van3Nuits, vanNuit1);
  decocher(van3Nuits, vanNuit2);
  decocher(van3Nuits, vanNuit3);
});

enfantsOui.addEventListener("change", () => {
  decocher(enfantsOui, enfantsNon);
});
enfantsNon.addEventListener("change", () => {
  decocher(enfantsNon, enfantsOui);
});

/**
 * [Decocher : permet de décocher une proposition]
 *
 * @param   {[string]}  boutoncoche      [Bouton coché par la personne]
 * @param   {[string]}  boutonadechoche  [Bouton à dechoché car un autre est coché]
 */
function decocher(boutoncoche, boutonadechoche) {
  if (boutoncoche.checked === true) {
    boutonadechoche.checked = false;
  }
}

// fin code Elodie
