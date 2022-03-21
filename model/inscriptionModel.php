<?php
require '../bdd/connexion.php';
echo 'Appel du moddel';
require '../controller/inscriptionController.php';
controller();
require '../vue/inscriptionView.php';
?>