<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/authentification.inc.php";

logout();

$titre = 'Accueil';
$css = "style/style.css";

include "$racine/vue/entete.php";
include "$racine/vue/vueAccueil.php";
?>