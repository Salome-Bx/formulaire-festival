// début code Salome

// fin code Salome

// code Aubin

let tarifReduit = document.querySelector("#tarifReduitRadio");
let pass1Jour = document.querySelector("#pass1jour");
let pass2Jour = document.querySelector("#pass2jours");
let pass3Jour = document.querySelector("#pass3jours");
let displayPass1Jour = document.querySelector("#pass1jourDate");
let displayPass2Jour = document.querySelector("#pass2joursDate");
let displayTarifReduit = document.querySelector("#tarifReduit");



 tarifReduit.addEventListener ("click", function(){
    console.log("ça marche");
    displayPass1Jour.classList.add("tarifHidden");
    displayPass2Jour.classList.add("tarifHidden");
    displayTarifReduit.classList.remove("tarifHidden");
    
    
})
 pass1Jour.addEventListener("click", function () {
    console.log("ça marche");
    displayTarifReduit.classList.add("tarifHidden");
    displayPass2Jour.classList.add("tarifHidden");
    displayPass1Jour.classList.remove("tarifHidden");
})
pass2Jour.addEventListener("click", function () {
    console.log("ça marche");
    displayTarifReduit.classList.add("tarifHidden");
    displayPass1Jour.classList.add("tarifHidden");
    displayPass2Jour.classList.remove("tarifHidden");

})
pass3Jour.addEventListener("click", function () {
    console.log("ça marche");
})





// fin code Aubin