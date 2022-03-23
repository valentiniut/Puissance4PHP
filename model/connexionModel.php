<?php
    // Etablissement de la connexion à la BDD
    require '../bdd/connexion.php';
    $db = connect();

    function userExist($identifiant, $mdp) {
        echo 'passage dans userExist';
        return true;
    }

?>