<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <?php require_once("inc/cssBS.php") ?>
    <link rel="stylesheet" href="styles/style.css">
    
</head>
<body>
    <div class="container">
<?php
include("../view/inc/header.php");
if (!isset($_SESSION["id"]) || $_SESSION["id"] !== session_id()) {
?>
<a href="?login">Login</a>
<?php
}else {
    ?>
<a href="?logout">Disconnect</a>
<?php
}
if (isset($_GET["login"])) {
    include("inc/login-form.php");
}
?>
<fieldset>
    <legend>Choisissez votre Passage</a></legend>
    <div class="portalHolder">
        <?php
            foreach($getPortals as $port) {
        ?>
        <div class="windowHolder row" id="windowHolder10">
            <h3><?=$port["title"]?></h3>
            <div class="portalWindow col" id="portalToCrudProject"><a href="<?=$port["dest_url"]?>"><img src="<?=$port["img_src"]?>" alt="Portal Image" class="w-100 h-100"></a>
                <div class="portalDesc" id="descCrudProject"><?=$port["description"]?></div>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
</fieldset>       
    

<script src="scripts/script.js"></script>
</div>
</body>
</html>