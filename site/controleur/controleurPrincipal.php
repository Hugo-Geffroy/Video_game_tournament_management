<?php

function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "accueil.php";
    $lesActions["connexion"] = "connexion.php";
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["inscription"] = "inscription.php";
    $lesActions["profil"] = "monProfil.php";
    $lesActions["accueil"] = "accueil.php";
    $lesActions["tournoi"] = "list-tournoi.php";
    $lesActions["formTournoi"] = "formTournoi.php";
    $lesActions["confirm-tournoi"] = "confirm-tournoi.php";

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}
?>