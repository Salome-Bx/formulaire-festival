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
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="./assets/responsive.css">

</head>

<body>


    <header class="header">
        <h1>Résumé de votre commande</h1>
    </header>

    <div class="blocFormulaire">
        <ul>
            <li><?= $nom ?></li>
            <li><?= $prenom ?></li>
            <li><?= $nbReservation ?></li>
            <li><?= $emplacementTente ?></li>
            <li><?= $emplacementCamion ?></li>
            <li><?= $enfant ?></li>
            <li><?= $nbDescenteLuge ?></li>
        </ul>
        <h2> Le montant total de votre commande est : <?= $prixTotal ?></h2>
    </div>

</body>

</html>