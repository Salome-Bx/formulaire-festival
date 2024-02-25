<?php
session_start();
require_once "./config.php";

$mailAdmin = htmlspecialchars("admin@admin.com");
$motDePasseAdmin = password_hash("Jesuisadmin", PASSWORD_DEFAULT);

if (isset($_POST['emailConnexion']) && isset($_POST['motDePasseConnexion']) && !empty($_POST['emailConnexion']) && !empty($_POST['motDePasseConnexion'])) {
    if (filter_var($_POST['emailConnexion'], FILTER_VALIDATE_EMAIL)) {
        $mail = htmlspecialchars($_POST['emailConnexion']);
        if ($mail === $mailAdmin) {
            if (password_verify($_POST['motDePasseConnexion'], $motDePasseAdmin)) {
                $_SESSION['connecté'] = TRUE;
                //Renvoie à la page Admin quand tout est bon
                header('location:../pageAdmin.php');
            } else {
                header('location:../connexion.php?erreur=' . ERREUR_CONNEXION);
            }
        } else {
            header('location:../connexion.php?erreur=' . ERREUR_CONNEXION);
        }
    } else {
        header('location:../connexion.php?erreur=' . ERREUR_CONNEXION);
    }
} else {
    header('location:../connexion.php?erreur=' . ERREUR_CHAMP_VIDE);
}