<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/authentification.inc.php";
include_once "$racine/modele/bd.tournoi.inc.php";

logout();
$tournois = getTournois();

$titre = 'Accueil';
$css = "style/style.css";

include "$racine/vue/entete.php";
include "$racine/vue/vueAccueil.php";
?>