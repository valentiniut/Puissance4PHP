<!-- vue de la grille de jeu -->
<!-- le tableau est fait avec bootstrap -->
<!-- les couleurs des pions sont de bootstrap - Rouge = danger - Bleu = primary -->
<!-- les flèches au dessus des colonnes sont des icônes "chevrons" de Font Awesome -->
<!-- les pions sont des icônes "circle" de Font Awesome -->


<?php ob_start(); ?>

    <div class="container text-center fa-4x">
        <div class="row" style="margin: -15px;">
            <div class="col">
                <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="col">
                <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="col">
                <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="col">
                <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="col">
                <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="col">
                <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="col">
                <i class="fa-solid fa-chevron-down"></i>
            </div>
        </div>
        <div class="row" style="margin: -15px;">
            <div class="col colonne1">
                <i class="fas fa-circle text-danger"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle text-primary"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle"></i>
            </div>
        </div>
        <div class="row" style="margin: -15px;">
            <div class="col colonne1">
                <i class="fas fa-circle"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle text-danger"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle text-primary"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle"></i>
            </div>
        </div>
        <div class="row" style="margin: -15px;">
            <div class="col colonne1">
                <i class="fas fa-circle"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle text-danger"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle text-primary"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle"></i>
            </div>
        </div>
        <div class="row" style="margin: -15px;">
            <div class="col colonne1">
                <i class="fas fa-circle"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle text-danger"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle text-primary"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle"></i>
            </div>
        </div>
        <div class="row" style="margin: -15px;">
            <div class="col colonne1">
                <i class="fas fa-circle"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle text-danger"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle text-primary"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle"></i>
            </div>
        </div>
        <div class="row" style="margin: -15px;">
            <div class="col colonne1">
                <i class="fas fa-circle"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle text-danger"></i>
            </div>
            <div class="col">
                <i class="fas fa-circle text-primary"></i>
            </div>
        </div>
    </div>

<?php $gamegrid = ob_get_clean(); ?>