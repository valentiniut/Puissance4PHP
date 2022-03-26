<?php
    $title = "Inscription | Puissance  4"; 
?>

<?php ob_start();?>

    <div class="card text-center mb-3">
        <div class="card-header text-white btn-gradient">Inscription</div>
        <div class="card-body">
            <div class="mb-3">
                <i class="fas fa-user-plus fa-8x"></i>
            </div>

            <div class="mb-5">
                <p class="card-text">Saisissez vos infromations de connexion :</p>
            </div>
            <?php
                if (isset($_SESSION['UserExist'])) {
                    if ($_SESSION['UserExist']) {
            ?>
            <!-- Message d'erreur -->
            <div class="erreur">
                Inscription impossible : le nom d'utilisateur est déjà pris.
            </div>
            <?php
                    }
                }
            ?>
            <!-- Formulaire d'inscription -->
            <form action="inscriptionController.php" method="POST">
                <div class="mb-3">
                    <label for="inputIdentifiant" class="form-label"><i class="fas fa-user"></i> Nom d'utilisateur</label>
                    <input required placeholder="Saisir votre identifiant" type="text" class="form-control" id="inputIdentifiant" name="inputIdentifiant">
                </div>

                <div class="mb-3">
                    <label for="inputPassword" class="form-label"><i class="fas fa-key"></i> Mot de passe</label>
                    <input required type="password" placeholder="Saisir votre mot de passe"  id="inputPassword" name="inputPassword" class="form-control">
                </div>

                <button type="submit" class="btn btn-gradient"><i class="fas fa-check"></i> Valider</button>
            </form>
        </div>
    </div>
    <a href="../index.php"><button type="button" class="btn btn-outline-secondary"><i
                class="fas fa-chevron-left"></i> Retour</button></a>

<?php $content = ob_get_clean(); ?>

<?php require('header.php'); ?>