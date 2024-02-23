<?php

// importer ici les classes nécéssaires
require_once "./classes/User.php";
require_once "./config.php";



if (isset($_POST['nombrePlaces']) && isset($_POST['nom']) && isset($_POST['prenom'])  && isset($_POST['email']) && isset($_POST['telephone']) && isset($_POST['adressePostale']) && !empty($_POST['nombrePlaces']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['telephone']) && !empty($_POST['adressePostale'])) {


    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $mail = htmlspecialchars($_POST['email']);
    } else {
        header('location:../index.php?erreur=' . ERREUR_EMAIL);
    }



    // if ($_POST['password'] === $_POST['password2']) {
    //     if (strlen($_POST['password']) >= 8) {
    //         $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    //     } else {
    //         header('location:../index.php?erreur=' . ERREUR_PASSWORD_LENGTH);
    //     }
    // } else {
    //     header('location:../index.php?erreur=' . ERREUR_PASSWORD_IDENTIQUE);
    // }

    $typeRerservation;
    if (isset($_POST['choixJour1'])) {
        $typeRerservation = '1Journee0107';
    } else if (isset($_POST['choixJour2'])) {
        $typeRerservation = '1Journee0207';
    } else if (isset($_POST['choixJour3'])) {
        $typeRerservation = '1Journee0307';
    } else if (isset($_POST['choixJour12'])) {
        $typeRerservation = '2Journees01070207';
    } else if (isset($_POST['choixJour23'])) {
        $typeRerservation = '2Journees02070307';
    } else if (isset($_POST['pass3Jours'])) {
        $typeRerservation = '3Journees';
    } else if (isset($_POST['pass1Jourreduit'])) {
        $typeRerservation = '1JourneeReduit';
    } else if (isset($_POST['pass2joursreduit'])) {
        $typeRerservation = '2JourneesReduit';
    } else if (isset($_POST['pass3joursreduit'])) {
        $typeRerservation = '3JourneesReduit';
    }


    if ($retour) {
          
        // Appel de la page de récapitulation 
         include "./includes/popUp.php";

        die;
    } else {
        header('location:../index.php?erreur=' . ERREUR_ENREGISTREMENT);
        die;
    }
} else {

    header('location:../index.php?erreur=' . ERREUR_CHAMP_VIDE);
}
