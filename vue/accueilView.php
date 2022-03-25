<?php include 'gamegrid.php';?>

<?php $title = "Puissance  4";

?>

<?php ob_start(); ?>

    <div class="leaderboard">
    <div class="card border-primary mb-3" style="max-width: 18rem;">
        <div class="card-header text-white btn-gradient border-primary"><i class="fas fa-trophy"></i> Meilleures scores</div>
        <div class="card-body text-primary">
            <p class="card-text"><i class="fas fa-trophy goldTrophy"></i> Lorem Ipsum</p>
            <p class="card-text"><i class="fas fa-trophy silverTrophy"></i> Lorem Ipsum</p>
            <p class="card-text"><i class="fas fa-trophy bronzeTrophy"></i> Lorem Ipsum</p>
        </div>
    </div>

    <div class="row justify-content-between">
        <button class="btn btn-lg btn-primary text-start col-4"><i class="fas fa-user"></i> Joueur 1</button>
        <button class="btn btn-lg btn-danger text-end col-4">Joueur 2 <i class="fas fa-user"></i></button>
    </div>

    <?= $gamegrid ?>
    
<?php $content = ob_get_clean(); ?>
    
<?php require('base.php'); ?>