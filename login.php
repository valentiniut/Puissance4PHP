<?php $title = "Connexion | Puissance  4"; ?>

<?php ob_start(); ?>

    <div class="card text-center mb-3">
        <div class="card-header text-white btn-gradient">Connexion</div>
        <div class="card-body">
            <div class="mb-3">
                <i class="fas fa-user-circle fa-8x"></i>
            </div>

            <div class="mb-5">
                <p class="card-text">Saisissez vos informations de connexion :</p>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><i class="fas fa-user"></i> Nom d'utilisateur</label>
                <input type="text" class="form-control" id="exampleInputEmail1">
            </div>

            <label for="inputPassword2" class="form-label"><i class="fas fa-key"></i> Mot de passe</label>
            <input type="password" id="inputPassword2" class="form-control">
        </div>
    </div>
    <a href="index.php"><button type="button" class="btn btn-outline-secondary"><i class="fas fa-chevron-left"></i>
            Retour</button></a>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>