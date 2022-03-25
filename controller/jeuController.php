<?php
session_start();
if (isset($_SESSION["authentificationAccordee"])) {
    if (!$_SESSION["authentificationAccordee"]) {
        header('Location: connexionController.php');
    }
} else {
    header('Location: connexionController.php');
}

require_once '../model/jeuModel.php';

require_once '../vue/jeuView.php';