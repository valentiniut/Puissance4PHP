<?php $title = "Jeu | Puissance  4"; ?>

<?php ob_start(); ?>


<div class="container text-center fa-4x">
    <?php // génération de la grille
    for ($row = 0; $row < $hauteur; $row++){
        echo '<div class="row" style="margin: -15px;">';
        for ($col = 0; $col < $largeur; $col++) {
            echo '<div data- class="col">
                <i class="fas fa-circle"></i>
            </div>';
        }
        echo '</div>';
    }
    ?>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('header.php'); ?>
