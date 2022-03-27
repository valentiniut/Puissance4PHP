<?php
require '../bdd/connexion.php';
class CompteModel extends connexion {
    /*
     * Récupère le score d'un joueur
     */
    function getScore($identifiant) {
        $req = "SELECT score FROM utilisateur WHERE identifiant=:identifiant";
		$stmt = $this->connect()->prepare($req);
        $stmt->bindValue(":identifiant",$identifiant,PDO::PARAM_STR);
        $stmt->execute();
        $resultat = $stmt->fetch()['score'];
        $stmt->closeCursor();

        return $resultat;
    }

    /*
     * Récupère l'ID d'une partie où il y a une place de libre
     */
    function getIdPartieLibre() {
        $req = "SELECT MIN(id) as idPartie FROM partie WHERE joueurDeux IS NULL AND enCour is TRUE";
        $stmt = $this->connect()->prepare($req);
        $stmt->execute();
        $resultat = $stmt->fetch()['idPartie'];
        $stmt->closeCursor();

        return $resultat;
    }

    /*
     * Créer une partie et retourne son id
     */
    function creerPartie($hauteur, $largeur, $createur, $grille) {
        $idCreateur = $this->getIdJoueurByIdentifiant($createur);
        $req = "INSERT INTO partie (hauteur, largeur, joueurUn, grille, enCour, tourJoueur)
        values (:hauteur, :largeur, :idCreateur, :grille, :enCour, :idCreateur)";
        $stmt = $this->connect()->prepare($req);
        $stmt->bindValue(":hauteur",$hauteur,PDO::PARAM_INT);
        $stmt->bindValue(":largeur",$largeur,PDO::PARAM_INT);
        $stmt->bindValue(":idCreateur",$idCreateur,PDO::PARAM_INT);
        $stmt->bindValue(":grille",$grille,PDO::PARAM_STR);
        $stmt->bindValue(":enCour",1,PDO::PARAM_INT);
        $stmt->execute();

        $req = "SELECT MAX(id) as idPartie FROM partie";
        $stmt = $this->connect()->prepare($req);
        $stmt->execute();
        $resultat = $stmt->fetch()['idPartie'];
        $stmt->closeCursor();

        return $resultat;
    }

    function getIdJoueurByIdentifiant($identifiant) {
        $req = "SELECT id FROM utilisateur WHERE identifiant=:identifiant";
        $stmt = $this->connect()->prepare($req);
        $stmt->bindValue(":identifiant",$identifiant,PDO::PARAM_STR);
        $stmt->execute();
        $resultat = $stmt->fetch()['id'];
        $stmt->closeCursor();

        return $resultat;
    }

    function partieExist($idPartie) {
        $req = "SELECT COUNT(*) as nb FROM partie WHERE id=:idPartie";
        $stmt = $this->connect()->prepare($req);
        $stmt->bindValue(":idPartie",$idPartie,PDO::PARAM_INT);
        $stmt->execute();
        $resultat = $stmt->fetch()['nb'];
        $stmt->closeCursor();

        return ($resultat != 0);
    }
}
?>