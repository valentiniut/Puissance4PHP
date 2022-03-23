<!-- Fichier servant de modèle réutilisable sur les autres pages -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <title><?= $title ?></title>
        <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>🔵</text></svg>">
        <!-- Bootstrap 5.1.3 (css / js) -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha512-OvBgP9A2JBgiRad/mM36mkzXSXaJE9BEIENnVEmeZdITvwT09xnxLtT4twkCa8m/loMbPHsvPl0T8lRGVBwjlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Font Awesome 6.1.0 (pack d'icônes) -->
        <!-- Liste d'icônes disponibles : https://fontawesome.com/search?m=free -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Police Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />
        <!-- Fichier css -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <!-- Fichier js -->
        <script type="text/javascript" src="js/script.js"></script>
    </head>
    <body>
        <?php 
            // couleur du titre
            $nb = rand(0, 1);
            $color1 = ($nb == 1) ? "#fc5c7d" : '#6a82fb';
            $color2 = ($nb == 1) ? "#6a82fb" : '#fc5c7d';
        ?>
        <h1>
            <i class="fas fa-coins" style="color:<?php echo $color1; ?>"></i> <span style="color:<?php echo $color2; ?>">Puissance 4</span> en ligne
        </h1>

        <div class="account-menu">
            <a href="controller/inscriptionController.php"><button type="button" class="btn btn-gradient"><i class="fas fa-user-plus"></i> Inscription</button></a>
            <a href="controller/connexionController.php"><button type="button" class="btn"><i class="fas fa-sign-in-alt"></i> Connexion</button></a>
        </div>
        <br/>

        <!-- Les autres pages doivent appeler ce fichier et mettre leur contenu dans une variable $content qui sera récupéré et placé à cette endroit dans le code html -->
        <?= $content ?>

        <footer>
            Nicolas Couffin - Thomas Perret - Valentin Couderc | 2022
        </footer>
    </body>
</html>