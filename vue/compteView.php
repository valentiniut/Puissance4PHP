<?php $title = "Compte | Puissance  4"; ?>

<?php ob_start(); ?>
<div class="card text-center mb-3">
    <div class="card-header text-white btn-gradient"><?php echo $_SESSION['Bienvenu']; ?></div>
    <div class="card-body">
        <!-- Recherche partie libre -->
        <form action="compteController.php" method="POST">
            <input type="hidden" id="recherchePartie" name="recherchePartie" value="recherche">
            <button class="btn btn-gradient" id="btnPartieLibre">Rejoindre une partie libre</button>
            <?php
            if (isset($_SESSION['AucunePartieLibre'])) {
                if ($_SESSION['AucunePartieLibre']) {
            ?>
            <!-- Message aucune partie libre -->
            <div class="erreur">
                Il n'y a pas de partie libre. Vous devriez en créer une.
            </div>
            <?php                            
                    }
                }
            ?>
        </form>
        <hr><hr>

        <!-- Formulaire pour rejoindre une partie -->
        <div class="mb-5">
            <p class="card-text">Rejoindre une partie existante :</p>
        </div>
        <form action="compteController.php" method="POST">
            <div class="mb-3">
                <label for="idPartie" class="form-label">ID de la partie</label>
                <input required placeholder="Saisir l'ID de la partie" type="number" class="form-control" id="idPartie" name="idPartie">
            </div>
            <?php
            if (isset($_SESSION['PartieIntrouvable'])) {
                if ($_SESSION['PartieIntrouvable']) {
            ?>
            <!-- Message partie introuvable -->
            <div class="erreur">
                Partie introuvable. L'ID saisie est-il correct ?
            </div>
            <?php                            
                    }
                }
            ?>
            <button type="submit" class="btn btn-gradient">Rejoindre</button>
        </form>
        <hr><hr>

        <!-- Formulaire pour créer une partie -->
        <div class="mb-5">
            <p class="card-text">
                Créer une partie :<br>
                - Dimensions minimums : 6x6<br>
                - Dimensions maximums : 10x10
            </p>
        </div>
        <form action="compteController.php" method="POST">
            <div class="mb-3">
                <label for="hauteur" class="form-label">Hauteur de la grille</label>
                <input required placeholder="Saisir la hauteur de la grille" type="number" class="form-control" id="hauteur" name="hauteur">
            </div>
            <div class="mb-3">
                <label for="largeur" class="form-label">Largeur de la grille</label>
                <input required placeholder="Saisir la largeur de la grille" type="number" class="form-control" id="largeur" name="largeur">
            </div>
            <?php
            if (isset($_SESSION['ValeursInvalides'])) {
                if ($_SESSION['ValeursInvalides']) {
            ?>
            <!-- Message partie introuvable -->
            <div class="erreur">
                La largeur et/ou la hauteur ne sont pas valides. Merci de saisir des valeurs dans l'interval de dimensions valide.
            </div>
            <?php                            
                    }
                }
            ?>
            <button type="submit" class="btn btn-gradient">Créer</button>
        </form>
    </div>
</div>
<a href="../index.php"><button type="button" class="btn btn-outline-secondary"><i
    class="fas fa-chevron-left"></i> Retour</button></a>

<?php $content = ob_get_clean(); ?>

<?php require('header.php'); ?>