<?php
require '../bdd/connexion.php';
echo 'Appel du moddel';
require '../controller.php';
controller();
require '../vue/inscriptionView.php';
?>