<?php
    function getTypeJeu($pdo) {
        try {
            $query = "SELECT libelleT FROM typejeu";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_COLUMN);
        } catch (PDOException $e) {
            // Handle exception
            error_log("Error fetching libelleT: " . $e->getMessage());
            return [];
        }
    }

    function getLibelleTypeJeuById($idTJ) {
        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("SELECT libelleT FROM typejeu WHERE idTJ = :idTJ");
            $req->bindValue(':idTJ', $idTJ, PDO::PARAM_INT);
            $req->execute();
            $row = $req->fetch();
            return $row ? $row['libelleT'] : "Inconnu";
        } 
        catch (PDOException $e) {
            return "Erreur";
        }
    }

?>