<?php

include_once "bd.inc.php";

function getUtilisateurs() {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from utilisateur");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getUtilisateurByMailU($mailU) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from utilisateur where mailU=:mailU");
        $req->bindValue(':mailU', $mailU, PDO::PARAM_STR);
        $req->execute();
        
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function addUtilisateur($idU, $mailU, $mdpU, $pseudoU) {
    try {
        $cnx = connexionPDO();

        $mdpUCrypt = crypt($mdpU, "sel");
        $req = $cnx->prepare("insert into utilisateur (idU, mailU, mdpU, pseudoU) values(:idU, :mailU,:mdpU,:pseudoU)");
        $req->bindvalue(':idU', $idU, PDO::PARAM_INT);
        $req->bindValue(':mailU', $mailU, PDO::PARAM_STR);
        $req->bindValue(':mdpU', $mdpUCrypt, PDO::PARAM_STR);
        $req->bindValue(':pseudoU', $pseudoU, PDO::PARAM_STR);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function genUUID($length = 10) {
    $min = (int) str_pad('1', $length, '0');
    $max = (int) str_pad('', $length, '9');
    $resultat = random_int($min, $max);
    // On verifie que le UUID n'existe pas deja et s'il existe déjà on en regénère un autre
    while (getUUID($resultat) != null) {
        $resultat = random_int($min, $max);
    }
    return $resultat;
}

function getUUID($idU) {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select idU from utilisateur where idU = :idU");
        $req->bindValue(':idU', $idU, PDO::PARAM_INT);
        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog principal de test
    header('Content-Type:text/plain');

    echo "getUtilisateurs() : \n";
    print_r(getUtilisateurs());

    echo "getUtilisateurByMailU(\"mathieu.capliez@gmail.com\") : \n";
    print_r(getUtilisateurByMailU("mathieu.capliez@gmail.com"));

    echo "addUtilisateur('mathieu.capliez3@gmail.com', 'azerty', 'mat') : \n";
    addUtilisateur("mathieu.capliez3@gmail.com", "azerty", "mat");
}
?>