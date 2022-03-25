<?php
// Appel de la fonction de connexion  la BDD
require '../bdd/connexion.php';

class connexionModel extends connexion
{
    /*
     * Authentifiacation d'un utilisateur
     */
    function userAuth($identifiant, $mdp)
    {
        $rqt = $this->connect()->prepare("SELECT motDePasse FROM utilisateur WHERE identifiant = ?");
        try {
            $rqt->execute(array($identifiant));
            while ($row = $rqt->fetch()) {
                return password_verify($mdp, $row["motDePasse"]);
            }
        } catch (Exception $e) {
            return false;
        }
    }
}

?>