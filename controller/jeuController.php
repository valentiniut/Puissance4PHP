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

// Chargement de la vue
require_once '../vue/jeuView.php';