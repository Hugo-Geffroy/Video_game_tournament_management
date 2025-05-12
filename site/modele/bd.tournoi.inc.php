<?php

include_once "bd.inc.php";

function getTournois() {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select T.*, TJ.libelleT, J.nomJ from tournoi T JOIN jeu J ON T.idJ = J.idJ JOIN typejeu TJ ON J.idTJ = TJ.idTJ");
        $req->execute();

        $resultat = array();
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

function getTournoiTag() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from typejeu");
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

function addTournoi($nomTournoi, $date_deb, $date_fin, $ville, $pays, $nb_joueur, $descTour, $typejeu) {
    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("
            INSERT INTO tournoi (nomTournoi, date_deb, date_fin, ville, pays, nb_joueur, descTournoi, idJ)
            VALUES (:nomTournoi, :date_deb, :date_fin, :ville, :pays, :nb_joueur, :descTour, :idJ)
        ");

        $req->bindValue(':nomTournoi', $nomTournoi, PDO::PARAM_STR);
        $req->bindValue(':date_deb', $date_deb, PDO::PARAM_STR);
        $req->bindValue(':date_fin', $date_deb, PDO::PARAM_STR);
        $req->bindValue(':ville', $ville, PDO::PARAM_STR);
        $req->bindValue(':pays', $pays, PDO::PARAM_STR);
        $req->bindValue(':nb_joueur', $nb_joueur, PDO::PARAM_INT);
        $req->bindValue(':descTour', $descTour, PDO::PARAM_STR);
        $req->bindValue(':idJ', $typejeu, PDO::PARAM_INT);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


?>