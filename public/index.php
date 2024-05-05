<?php
session_start();

require_once("../config.php");
require_once("../control/dbConnectControl.php");
require_once("../model/laundryModel.php");
require_once("../model/loginModel.php");



if (isset($_SESSION["id"]) && ($_SESSION["id"]) === session_id()) {
    echo "You're in";
    require_once("../control/privateControl.php");
}else {
    require_once("../control/publicControl.php");
}
$db = null;