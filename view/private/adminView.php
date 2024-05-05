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
        include("../view/inc/header.php");
    ?>
    
    <div class="container w-50 d-flex flex-column justify-content-around text-center">
            <?php
                include("inc/add-form.php");
            ?>
         <a href="?logout">Leave</a>
            <!-- CONTAINER POUR LE CONTENU PRINCIPAL -->


    </div>

    <?php
        // INCLURE SI NECESSAIRE
        include("../view/inc/footer.php");
    ?>
    </div>
    <?php require_once("../view/inc/jsBS.php"); ?>
    <script src="scripts/script.js"></script>
</body>
</html>