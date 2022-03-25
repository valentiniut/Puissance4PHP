<?php
    // import du modèle
    require '../model/inscriptionModel.php';

    if (isset($_POST['inputIdentifiant']) && isset($_POST['inputPassword'])) {
	    var_dump($_POST['inputIdentifiant']);
	    var_dump($_POST['inputPassword']);
	    if ($_POST['inputIdentifiant'] != null && $_POST['inputIdentifiant'] != "" && $_POST['inputPassword'] != null && $_POST['inputPassword'] != "") {
	        $identifiant = htmlspecialchars($_POST['inputIdentifiant']);
	        $mdp = htmlspecialchars($_POST['inputPassword']);
	        $a = new InscriptionModel();
	        if ($a->userExist($identifiant)) {
	        	// TODO inscription impossible
	        } else {	        		        	
	        	$mdp = password_hash($mdp, PASSWORD_DEFAULT);	   // Hachage du mot de passe     	
	        	$a->addNewUser($identifiant, $mdp);
	        	  header('Location: ../vue/ ');
  				  exit();
	        }
	    }
	}

	// import de la vue
    require_once '../vue/inscriptionView.php';
?>