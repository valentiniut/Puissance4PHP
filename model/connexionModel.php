<?php
// Appel de la fonction de connexion  la BDD
require '../bdd/connexion.php';

// Authentification d'un utilisateur
function userAuth($identifiant, $mdp)
{
    $db = connect();
    $rqt = $db->prepare("SELECT motDePasse FROM utilisateur WHERE identifiant = ?");
    try {
        $rqt->execute(array($identifiant));
        while ($row = $rqt->fetch()) {
            if (password_verify($mdp, $row["motDePasse"])) {
                return true;
            } else {
                return false;
            }
        }
    } catch (Exception $e) {
        return false;
    }

}

?>