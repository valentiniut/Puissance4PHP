<?php
require '../bdd/connexion.php';
class InscriptionModel extends connexion {
    /*
     * Ajout d'un nouvel utilisateur en base de données
     */
    function addNewUser($identifiant, $motDePasse) {
    	$req = "INSERT INTO utilisateur (identifiant, motDePasse)
        values (:identifiant, :motDePasse)";
        $stmt = $this->connect()->prepare($req);
        $stmt->bindValue(":identifiant",$identifiant,PDO::PARAM_STR);
        $stmt->bindValue(":motDePasse",$motDePasse,PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }

    /*
     * Détermine si un utilisateur est déjà inscrit
     */
    function userExist($identifiant) {
        $req = "SELECT COUNT(*) as nb FROM utilisateur WHERE identifiant=:identifiant";
		$stmt = $this->connect()->prepare($req);
        $stmt->bindValue(":identifiant",$identifiant,PDO::PARAM_STR);
        $stmt->execute();
        $resultat = $stmt->fetch()['nb'];
        $stmt->closeCursor();

        return ($resultat != 0);
    }
}
?>