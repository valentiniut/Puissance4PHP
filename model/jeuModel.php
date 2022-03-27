<?php
// Appel de la fonction de connexion  la BDD
require '../bdd/connexion.php';

class jeuModel extends connexion {
    function recupererGrille($idPartie) {
        $req = $this->connect()->prepare("SELECT hauteur, largeur, grille FROM partie WHERE id = ?");
        try {
            $req->execute(array($idPartie));
            while ($row = $req->fetch()) {
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