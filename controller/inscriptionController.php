<?php
	session_start();
    // import du modèle
    require '../model/inscriptionModel.php';

	$_SESSION['UserExist'] = false;
    if (isset($_POST['inputIdentifiant']) && isset($_POST['inputPassword'])) {
	    if ($_POST['inputIdentifiant'] != null && $_POST['inputIdentifiant'] != "" && $_POST['inputPassword'] != null && $_POST['inputPassword'] != "") {
	        $identifiant = htmlspecialchars($_POST['inputIdentifiant']);
	        $mdp = htmlspecialchars($_POST['inputPassword']);
	        $inscriptionModel = new InscriptionModel();
	        if (!$inscriptionModel->userExist($identifiant)) {  		        	
	        	$mdp = password_hash($mdp, PASSWORD_DEFAULT);	   // Hachage du mot de passe 
	        	$_SESSION["authentificationAccordee"] = true;
	        	$_SESSION["identifiant"] = $identifiant;  	
	        	$inscriptionModel->addNewUser($identifiant, $mdp);
	        	header('Location: ../controller/compteController.php');
  				exit();
	        } else {
	        	$_SESSION['UserExist'] = true;
	        }
	    }
	}

	// import de la vue
    require_once '../vue/inscriptionView.php';
?>