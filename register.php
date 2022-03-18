<?php $title = "Inscription | Puissance  4"; ?>

<?php ob_start(); ?>

    <div class="card text-center mb-3">
        <div class="card-header text-white btn-gradient">Inscription</div>
        <div class="card-body">
            <div class="mb-3">
                <i class="fas fa-user-plus fa-8x"></i>
            </div>

            <div class="mb-5">
                <p class="card-text">Saisissez vos infromations de connexion :</p>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label"><i class="fas fa-user"></i> Nom d'utilisateur</label>
                <input type="text" class="form-control" id="exampleInputEmail">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><i class="fas fa-envelope"></i> Adresse e-mail</label>
                <input type="text" class="form-control" id="exampleInputEmail1">
            </div>

            <div class="mb-3">
                <label for="inputPassword5" class="form-label"><i class="fas fa-key"></i> Mot de passe</label>
                <input type="password" id="inputPassword5" class="form-control">
            </div>

            <button type="button" class="btn btn-gradient"><i class="fas fa-check"></i> Valider</button>
        </div>
    </div>
    <a href="index.php"><button type="button" class="btn btn-outline-secondary"><i
                class="fas fa-chevron-left"></i> Retour</button></a>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>