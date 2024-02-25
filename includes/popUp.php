<?php


?>


<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récapitulatif commande</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="./assets/responsive.css">

</head>

<body>


    <header class="header">
        <h1>Résumé de votre commande</h1>
    </header>

    <div class="blocFormulaire">
        <ul>
            <!-- $typeRerservation, $nuit, $nbrEnfant, $nbrCasqueEnfant, $nbrDescenteLuge, $idUser -->
            <li><?= $nom ?></li>
            <li><?= $prenom ?></li>
            <li><?= "Vous avez pris " . $nbrReservation . " réservations." ?></li>
            <li> <?php if ($typeRerservation == 'choixJour1') {
                        echo 'Vous avez réservé pour le 01/07';
                    } else if ($typeRerservation == 'choixJour2') {
                        echo 'Vous avez réservé pour le 02/07';
                    } else if ($typeRerservation == 'choixJour3') {
                        echo 'Vous avez réservé pour le 03/07';
                    } else if ($typeRerservation == 'choixJour12') {
                        echo 'Vous avez réservé pour le 01/07 et le 02/07';
                    } else if ($typeRerservation == 'choixJour23') {
                        echo 'Vous avez réservé pour le 02/07 et le 03/07';
                    } else if ($typeRerservation == 'pass3Jours') {
                        echo 'Vous avez réservé pour les trois jours.';
                    } else if ($typeRerservation == 'pass1Jourreduit') {
                        echo 'Vous avez pris un jour en tarif réduit';
                    } else if ($typeRerservation == 'pass2joursruit') {
                        echo 'Vous avez pris deux jours en tarif réduit';
                    } else if ($typeRerservation == 'pass3joursruit') {
                        echo 'Vous avez pris trois jours en tarif réduit';
                    } ?></li>
            <li><?php
                $message = "";
                foreach ($nuit as $indiceTableau) {
                    switch ($indiceTableau) {
                        case "nuit0107Tente":
                            $message .= "Vous avez réservé une nuit en tente le 01/07.";
                            break;
                        case "nuit0207Tente":
                            $message .= "Vous avez réservé une nuit en tente le 02/07.";
                            break;
                        case "nuit0307Tente":
                            $message .= "Vous avez réservé une nuit en tente le 03/07.";
                            break;
                        case "3nuitTente":
                            $message .= "Vous avez réservé les trois nuits en tente.";
                            break;
                        case "nuit0107Van":
                            $message .= "Vous avez réservé une nuit en van le 01/07.";
                            break;
                        case "nuit0207Van":
                            $message .= "Vous avez réservé une nuit en van le 02/07.";
                            break;
                        case "nuit0307Van":
                            $message .= "Vous avez réservé une nuit en van le 03/07.";
                            break;
                        case "3nuitVan":
                            $message .= "Vous avez réservé les trois nuits en van.";
                            break;
                    }
                    echo $message;
                }


                ?></li>

            <li><?php
                if ($nbrEnfant == TRUE) {
                    echo "Vous avez indiqué venir avec un ou des enfants, et réservé " . $nbrCasqueEnfant . " casque(s).";
                }
                ?></li>
            <li><?php
                if (!empty($nbrDescenteLuge))
                    echo "Vous avez choisi de faire " . $nbrDescenteLuge . " descente(s) de luge."; ?></li>
        </ul>



        <h2> Le montant total de votre commande est : <?php $prixTotal = $reservation->calculerPrix();
                                                        echo $prixTotal . " €.";  ?></h2>
    </div>

</body>

</html>