<?php

include_once "$racine/modele/bd.typejeu.inc.php"; // pour pouvoir utiliser getTypeJeu()
include_once "$racine/modele/bd.tournoi.inc.php";

$racine=".";

// Sécuriser les données du formulaire et récupérer le libelle du type de jeu
$titre = $_POST['title'];
$game = htmlspecialchars($_POST['game']);
$location = htmlspecialchars($_POST['location']);
$date = htmlspecialchars($_POST['date']);
$max_players = (int)$_POST['max_players'];
$description = $_POST['description'];
$typejeu = (int)$_POST['typejeu'];
$libelle_typejeu = getLibelleTypeJeuById($typejeu);

// Modifie la location pour être correcte
$parts = explode(',', $location);
if (count($parts) !== 2) {
    // Gérer l'erreur : format inattendu
    die("Erreur : le champ 'location' doit être sous la forme 'Ville, Pays'");
}
$ville = isset($parts[0]) ? trim($parts[0]) : '';
$pays = isset($parts[1]) ? trim($parts[1]) : '';

// Enregistre les tournois dans la base de données
addTournoi($titre, $date, $date, $ville, $pays, $max_players, $description, $typejeu);

// Vide les variables et le Post pour éviter les injections XSS



// Contenu HTML de la page du tournoi
$css = "$racine/style/style-confirm-tournoi.css";
$titre = $titre; // utilisé dans la vue
include "$racine/vue/entete.php";
include "$racine/vue/vueConfirmTournoi.php";

?>

