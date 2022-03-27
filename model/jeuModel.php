<?php
// Appel de la fonction de connexion  la BDD
require '../bdd/connexion.php';

class jeuModel extends connexion {
    function recupererGrille($idPartie) {
        $req = $this->connect()->prepare("SELECT id, hauteur, largeur, grille FROM partie WHERE id = ?");
        try {
            $req->execute(array($idPartie));
            while ($row = $req->fetch()) {
                $_SESSION['idPartie'] = $row['id'];
                $_SESSION['hauteurG'] = $row['hauteur'];
                $_SESSION['largeurG'] = $row['largeur'];
                $_SESSION['grille'] = $row['grille'];
            }
        } catch (Exception $e) {
            echo "<h2>erreur</h2>";
        }

    }
}
?>