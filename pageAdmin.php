<?php
session_start();

if (!isset($_SESSION['connecté'])) {
    header('location: connexion.php');
    die;
}

require_once "src/classes/Reservation.php";
require_once "src/classes/User.php";
require_once "src/classes/Database.php";


?>

<!DOCTYPE html>
<html lang="fr">

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="./assets/responsive.css">

</head>

<body>

    <!------------------- HEADER ------------------->
    <header class="header">
        <a href="./deconnexion.php" class="boutonConnexion">Déconnexion</a>
        <h1>Vercors Musique Festival</h1>
    </header>
    <!------------------- BODY ------------------->

    <section>
        <?php

        $DBR = new Database('Reservation');
        $reservations = $DBR->getAllReservations();

        foreach ($reservations as $reservation) {
            $IdUser = $reservation->getIdUser();

            $DBU = new Database('User');
            $utilisateur = $DBU->getThisUtilisateurById($IdUser); ?>

            <div class="reservation <?= $reservation->getId() ?>">
                <p><b><?= $utilisateur->getPrenom() ?> <?= $utilisateur->getNom() ?></b></p>
                <p><?= $reservation->getNbrReservation() ?> réservations</p>
                <p>Jour(s) choisi(s) :<?php if ($reservation->getTypeRerservation() == '1Journee0107') {
                                            echo ' le 01/07';
                                        } else if ($reservation->getTypeRerservation() == '1Journee0207') {
                                            echo ' le 02/07';
                                        } else if ($reservation->getTypeRerservation() == '1Journee0307') {
                                            echo ' le 03/07';
                                        } else if ($reservation->getTypeRerservation() == '2Journees01070207') {
                                            echo ' le 01/07 et le 02/07';
                                        } else if ($reservation->getTypeRerservation() == '2Journees02070307') {
                                            echo ' le 02/07 et le 03/07';
                                        } else if ($reservation->getTypeRerservation() == '3Journees') {
                                            echo ' les trois jours.';
                                        } else if ($reservation->getTypeRerservation() == '1JourneeReduit') {
                                            echo ' un jour en tarif réduit';
                                        } else if ($reservation->getTypeRerservation() == '2JourneesReduit') {
                                            echo ' deux jours en tarif réduit';
                                        } else if ($reservation->getTypeRerservation() == '3JourneesReduit') {
                                            echo ' trois jours en tarif réduit';
                                        } ?></p>
                <p>Nuit(s) : <?= $reservation->getNuit() ?> </p>
                <?php if ($reservation->getNbrEnfant() == true) {
                ?>
                    <div class="displayflex">
                        <p>Enfant : Oui</p>
                        <p>Casque antibruit : <?= $reservation->getNbrCasqueEnfant() ?></p>
                    </div>
                <?php } else {
                ?>
                    <div class="displayflex">
                        <p>Enfant : Non</p>
                    </div>
                <?php }
                ?>
                <p>Descente luge : <?= $reservation->getNbrDescenteLuge() ?></p>
                <p><em>Coordonnées : </em></p>
                <div class="displayflex">
                    <p>Email : <?= $utilisateur->getMail() ?></p>
                    <p>Téléphone : <?= $utilisateur->getTel() ?></p>
                    <p>Adresse : <?= $utilisateur->getAdresse() ?></p>
                </div>
                <p class="prixPaye"> Total :
                    <?= $reservation->calculerPrix() ?> €
                </p>


            </div>
        <?php } ?>
    </section>