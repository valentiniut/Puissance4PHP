<?php
// import du modèle
require_once '../model/connexionModel.php';

if (isset($_POST['inputIdentifiant']) && isset($_POST['inputPassword'])) {
    var_dump($_POST['inputIdentifiant']);
    var_dump($_POST['inputPassword']);
    if ($_POST['inputIdentifiant'] != null && $_POST['inputIdentifiant'] != "" && $_POST['inputPassword'] != null && $_POST['inputPassword'] != "") {
        $identifiant = htmlspecialchars($_POST['inputIdentifiant']);
        $mdp = htmlspecialchars($_POST['inputPassword']);

        if (userExist($identifiant, $mdp)) {
            echo "return true";
            header('Location: compteController.php');
            exit();
        } else {
            echo "<h1>erreur</h1>";
        }
    }
}


    // import de la vue
    require_once '../vue/connexionView.php';


?>