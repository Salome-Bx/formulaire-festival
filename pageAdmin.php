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
            $utilisateur = $DBU->getIDUtilisateurs(); ?>

            <div class="reservation <?= $reservation->getId() ?>">
                <p><b><?= $utilisateur->getPrenom() ?><?= $utilisateur->getNom() ?></b></p>
                <p><?= $reservation->getNbrReservation() ?> réservations</p>
                <p>Jour(s) choisi(s) : <?= $reservation->getTypeRerservation() ?></p>
                <p>Nuit(s) : <?= $reservation->getNuit() ?> </p>
                <div class="displayflex">
                    <p>Enfant : <?= $reservation->getNbrEnfant() ?></p>
                    <p>Casque antibruit : <?= $reservation->getNbrCasqueEnfant() ?></p>
                </div>
                <p>Descente luge : <?= $reservation->getNbrDescenteLuge() ?></p>
                <p><em>Coordonnées : </em></p>
                <div class="displayflex">
                    <p>Email : <?= $utilisateur->getMail() ?></p>
                    <p>Téléphone : <?= $utilisateur->getTel() ?></p>
                    <p>Adresse : <?= $utilisateur->getAdressePostale() ?></p>
                </div>
                <p class="prixPaye">
                    <?= $reservation->calculerPrix() ?>
                </p>

                //En gros là on créer une boucle pour récupérer chaque résa et on récupére l'id user correspondant et suivant l'id qu'on récupére, on récupére le user avec un getuserbyid.

            </div>
        <?php } ?>
    </section>