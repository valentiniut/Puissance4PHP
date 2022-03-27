<?php
session_start();
// import du modèle
require_once '../model/connexionModel.php';

$_SESSION["authentificationAccordee"] = false;
$_SESSION["ErreurAuthentification"] = false;
// Controlle du formulaire de connexion
if (isset($_POST['inputIdentifiant'])
    && isset($_POST['inputPassword'])) {

    if ($_POST['inputIdentifiant'] != null
        && $_POST['inputIdentifiant'] != ""
        && $_POST['inputPassword'] != null
        && $_POST['inputPassword'] != "") {

        $identifiant = htmlspecialchars($_POST['inputIdentifiant']);
        $mdp = htmlspecialchars($_POST['inputPassword']);

        $a = new connexionModel();
        if ($a->userAuth($identifiant, $mdp)) {
            $_SESSION["authentificationAccordee"] = true;
            $_SESSION["identifiant"] = $identifiant;
            header('Location: compteController.php');
            exit();
        } else {
            $_SESSION["ErreurAuthentification"] = true;
        }
    }
}
// import de la vue
require_once '../vue/connexionView.php';
?>