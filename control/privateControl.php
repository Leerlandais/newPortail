<?php

if (isset($_GET["logout"])) {
    include_once("../model/logoutModel.php"); 
    die();   
}

if (isset($_POST["titleInp"],
          $_POST["descInp"],
          $_POST["imageInp"],
          $_POST["urlInp"]
)) {
    $title  = standardClean($_POST["titleInp"]); 
    $desc   = standardClean($_POST["descInp"]);
    $img    = urlClean($_POST["imageInp"]);
    $url    = urlClean($_POST["urlInp"]);

    $addNewItem = addNewItemToPortal ($db, $title, $desc, $img, $url);
}


$title = "You're in";
include("../view/private/adminView.php");

