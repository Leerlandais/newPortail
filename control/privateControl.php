<?php

if (isset($_GET["logout"])) {
    include_once("../model/logoutModel.php"); 
    die();   
}
$title = "we're in";
// include("../view/private/adminView.php");

include("../view/homeView.php");