<?php
session_start();
// test d'autorisation d'accès à la page de jeu.
if (isset($_SESSION["authentificationAccordee"])) {
    if (!$_SESSION["authentificationAccordee"]) {
        header('Location: connexionController.php');
    }
} else {
    header('Location: connexionController.php');
}

// Chargement du model
require_once '../model/jeuModel.php';

$jeuModel = new jeuModel();

// Test si on recherche une partie aléatoire
if (isset($_SESSION['partieAlea'])) {
    if ($_SESSION['partieAlea']){
        $jeuModel->recupererGrille($_SESSION['idPartieLibre']);
        $hauteur = $_SESSION['hauteurG'];
        $largeur = $_SESSION['largeurG'];
        $grille = json_encode($_SESSION['grille']);
    }
}

// Test si on recherche une partie précise
if (isset($_SESSION['partieRech'])) {
    if ($_SESSION['partieRech']){
        $jeuModel->recupererGrille($_SESSION['idRecherche']);
        $hauteur = $_SESSION['hauteurG'];
        $largeur = $_SESSION['largeurG'];
        $grille = json_encode($_SESSION['grille']);
    }
}

// Test si on viens de créer une partie
if (isset($_SESSION['partieCreation'])) {
    if ($_SESSION['partieCreation']){
        $jeuModel->recupererGrille($_SESSION['idPartieCree']);
        $hauteur = $_SESSION['hauteurG'];
        $largeur = $_SESSION['largeurG'];
        $grille = $_SESSION['grille'];
    }
}


// Chargement de la vue
require_once '../vue/jeuView.php';