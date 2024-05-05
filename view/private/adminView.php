<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once("../view/inc/cssBS.php"); ?>
    <link rel="stylesheet" href="styles/style.css">
    <title><?=$title?></title>
</head>
<body>
    <div class="container"> <!-- CONTAINER GLOBAL POUR ENGLOBÉ LE TOTALE -->
    <?php
        // INCLURE SI NECESSAIRE (BON ENDROIT POUR LE NAVBAR PAR EXEMPLE)
        include("inc/header.php");
    ?>
    
    <div class="container">
            <h2>THIS IS THE PRIVATE PAGE</h2>
        Voir le page <a href="?page=x">404</a>
            <!-- CONTAINER POUR LE CONTENU PRINCIPAL -->


    </div>

    <?php
        // INCLURE SI NECESSAIRE
        include("inc/footer.php");
    ?>
    </div>
    <?php require_once("../view/inc/jsBS.php"); ?>
    <script src="scripts/script.js"></script>
</body>
</html>