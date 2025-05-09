<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titre ?></title>
    <link rel="stylesheet" href=<?php echo $css; ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<!-- Bannière et Burger-->
<header class="navbar">
    <div class="nav-left">
        <img src="images/esports_logo_gold_transparent.png" alt="Logo Tournoi" style="height: 60px; width: auto; margin-right: 1rem;">
    </div>

    <div class="burger" onclick="toggleMenu()" id="burger">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <nav id="nav-menu">
        <a href="./?action=accueil">Accueil</a>
        <a href="#">Tournois</a>
        <?php if(isLoggedOn()){ ?>
            <a href="#">Créer un tournoi</a>
            <a href="./?action=profil">Mon profil</a>
            <a href="./?action=deconnexion">Déconnexion</a>
        <?php } 
        else{ ?>
            <a href="./?action=connexion">Connexion</a>
        <?php } ?>
    </nav>
</header>