<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.utilisateur.inc.php";
include_once "$racine/modele/authentification.inc.php";

// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["mailU"]) && isset($_POST["mdpU"])){
    $mailU=$_POST["mailU"];
    $mdpU=$_POST["mdpU"];
    $util = getUtilisateurByMailU($mailU);
}
else
{
    $mailU="";
    $mdpU="";
}

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage

// traitement si necessaire des donnees recuperees
login($mailU,$mdpU);

if (isLoggedOn()){ // si l'utilisateur est connecté on redirige vers le controleur monProfil
    $titre = 'Profil :: '. $util['pseudoU'];
    $css = "style/connexion.css";
    
    include "$racine/controleur/monProfil.php";
}
else{ // l'utilisateur n'est pas connecté, on affiche le formulaire de connexion
    // appel du script de vue 
    $titre = 'Connexion';
    $css = "style/style2.css";

    include "$racine/vue/entete.php";
    include "$racine/vue/vueConnexion.php";
}

?>