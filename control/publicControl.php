<?php

if (isset($_POST["nameInp"], $_POST["passInp"])) {
    $name = standardClean($_POST["nameInp"]);
    $pass = simpleTrim($_POST["passInp"]);
        
    $loginAttempt = userLogin ($db, $name, $pass);
    if ($loginAttempt === true) {
        header("Location: ./");
        die();
    }else {
        
        $title = "Incorrect Login";
       
    include "../view/homeView.php";
    die();
}
}

$title = "Welcome to my new Portfolio";
include("../view/homeView.php");
die();