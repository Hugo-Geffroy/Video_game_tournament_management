<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/bd.utilisateur.inc.php";

$inscrit = false;
$msg="";
// recuperation des donnees GET, POST, SESSION, et création UUID pour un nouveau compte
if (isset($_POST["mailU"]) && isset($_POST["mdpU"]) && isset($_POST["pseudoU"])) {

    if ($_POST["mailU"] != "" && $_POST["mdpU"] != "" && $_POST["pseudoU"] != "") {
        $idU = genUUID();
        $mailU = $_POST["mailU"];
        $mdpU = $_POST["mdpU"];
        $pseudoU = $_POST["pseudoU"];

        // enregistrement des donnees
        if ($_POST["mdpU"] == $_POST["confirm_mdpU"]) {
            if (getUtilisateurByMailU($mailU) == null) {
                $ret = addUtilisateur($idU, $mailU, $mdpU, $pseudoU);
            }
            else {
                $ret = true;
            }
            if ($ret) {
                $inscrit = true;
            } else {
                $msg = "l'utilisateur n'a pas été enregistré.";
            }
        } else {
            $msg = "Les mots de passe ne correspondent pas.";
        }
        
    }
 else {
    $msg="Renseigner tous les champs...";    
    }
}

if ($inscrit) {
    $titre = "Créer un compte";
    $css = "style/style2.css";
    
    include "$racine/vue/entete.php";
    include "$racine/vue/vueConfirmationInscription.php";
} else {
    $titre = "Créer un compte";
    $css = "style/connexion.css";
    include "$racine/vue/entete.php";
    include "$racine/vue/vueInscription.php";
}
?>