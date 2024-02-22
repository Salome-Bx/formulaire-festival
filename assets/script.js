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