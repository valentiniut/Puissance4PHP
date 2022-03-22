<?php

require 'controller/controllers.php';

// router (url: index.php?page={lapage})
if (isset($_GET['page'])) {
    if ($_GET['page'] == 'login') {
        login();
    }
    elseif ($_GET['page'] == 'register') {
        register();
    }
    else {
        echo 'ERREUR: La page demandée n\'existe pas.</br>';
        echo '<a href="index.php">Retour à l\'accueil</a>';
    }
}
else {
    // par défaut
    accueil();
}