<?php 
	session_start();

    require '../model/compteModel.php';
	// test d'autorisation d'accès à la page de jeu.
    if (isset($_SESSION["authentificationAccordee"])) {
	    if (!$_SESSION["authentificationAccordee"]) {
	        header('Location: connexionController.php');
	    }
	} else {
    	header('Location: connexionController.php');
	}

	$compteModel = new CompteModel();
    $_SESSION['Bienvenu'] = '<h1>Bienvenue '.$_SESSION["identifiant"].' (Score : '.$compteModel->getScore($_SESSION["identifiant"]).')</h1>';
    $_SESSION['AucunePartieLibre'] = false;
    $_SESSION['PartieIntrouvable'] = false;
    $_SESSION['ValeursInvalides'] = false;
    $_SESSION['partieAlea'] = false;
    $_SESSION['partieRech'] = false;
    $_SESSION['partieCreation'] = false;

	if (isset($_POST['recherchePartie'])) {
		// Cas recherche partie libre
		$idPartieLibre = $compteModel->getIdPartieLibre();
		if ($idPartieLibre != null) {
            $_SESSION['idPartieLibre'] = $idPartieLibre;
            $_SESSION['partieAlea'] = true;
			header('Location: jeuController.php');
		} else {
			$_SESSION['AucunePartieLibre'] = true;
		}
	}

    if (isset($_POST['idPartie'])) {
    	// Cas recherche partie existante
    	if ($_POST['idPartie'] != null) {
    		$idPartie = $_POST['idPartie'];
    		if ($compteModel->partieExist($idPartie)) {
                $_SESSION['idRecherche'] = $idPartie;
                $_SESSION['partieRech'] = true;
                header('Location: jeuController.php');
    		} else {
    			$_SESSION['PartieIntrouvable'] = true;
    		}
    	}
    }

    if (isset($_POST['hauteur']) && isset($_POST['largeur'])) {
    	// Cas création partie
    	if ($_POST['hauteur'] >= 6 && $_POST['largeur'] >= 6
    		&& $_POST['hauteur'] <= 10 && $_POST['largeur'] <= 10) {
    		// Création de la grille
    		$grille = creerGrille($_POST['hauteur'], $_POST['largeur']);

    		// Création de la partie en BD
    		$idPartieCree = $compteModel->creerPartie($_POST['hauteur'],
    								  				  $_POST['largeur'],
    								  				  $_SESSION['identifiant'],
    								  				  $grille);
    		// TODO Redirection vers la nouvelle partie à l'id $idPartieCree
            $_SESSION['idPartieCree'] = $idPartieCree;
            $_SESSION['partieCreation'] = true;
            header('Location: jeuController.php');
    	} else {
    		$_SESSION['ValeursInvalides'] = true;
    	}
    }

	// import de la vue
    require_once '../vue/compteView.php';

    /*
     * Création d'une grille qui sera encodée au format JSON
     */
    function creerGrille($hauteur, $largeur) {
    	$grille = array();
    	for ($i = 0; $i < $largeur; $i++) {
    		$colonne = array();
    		for($j = 0; $j < $hauteur; $j++) {
    			array_push($colonne, 0);
    		}
    		array_push($grille, $colonne);
    	}

    	return json_encode($grille);
    }
?>