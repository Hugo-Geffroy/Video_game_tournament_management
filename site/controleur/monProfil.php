<?php
    include_once "$racine/modele/authentification.inc.php";
    include_once "$racine/modele/bd.utilisateur.inc.php";

    if (isLoggedOn()) {
        $mailU = getMailULoggedOn();
        $util = getUtilisateurByMailU($mailU);
    } else {
        header("Location: $racine/controleur/connexion.php");
        exit();
    }

    $titre = 'Profil :: '. $util['pseudoU'];
    $css = "style/style.css";
    include "$racine/vue/entete.php";
    include "$racine/vue/vueAccueil.php";
?>