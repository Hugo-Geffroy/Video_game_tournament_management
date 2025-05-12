<?php
include_once "$racine/modele/bd.tournoi.inc.php";
$tournois = getTournois();

$titre = 'Liste des Tournois';
$css = "style/style.css";
include "$racine/vue/entete.php";
include "$racine/vue/vueListeTournoi.php";
?>