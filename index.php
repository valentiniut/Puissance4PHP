<?php
    // router (url: index.php?page={lapage})
    if (isset($_GET['page'])) {
        $controllerPath = 'controller/'.$_GET['page'].'Controller.php';
        if (file_exists($controllerPath)) {
            require $controllerPath;
        }
        else {
            echo 'ERREUR: La page demandée n\'existe pas.</br>';
            echo '<a href="index.php">Retour à l\'accueil</a>';
        }
    }
    else {
        // par défaut
        require 'controller/accueilController.php';
}