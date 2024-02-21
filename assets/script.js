// début code Salome
// récupération des 3 blocs du formulaire
let blocReservation = document.querySelector('#reservation');


let blocOptions = document.querySelector('#options');
blocOptions.classList.add("hidden");


let blocCoordonnees = document.querySelector('#coordonnees');
blocCoordonnees.classList.add("hidden");


function suivant(blocACacher, blocAAfficher) {
    blocACacher.classList.add("hidden");
    blocAAfficher.classList.remove("hidden");
}

// fin code Salome

// début code Elodie
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
