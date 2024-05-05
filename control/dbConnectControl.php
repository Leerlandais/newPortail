<?php
try {

    $db = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET . ";port=" . DB_PORT, DB_LOGIN, DB_PWD);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

} catch (Exception) {
    die($errorMessage = "Problem connecting to the DB");
}

if (isset($db) && isset($_SESSION["id"])) {
    echo "LEAVE TO DO NOTES HERE<br>" ;
    echo "Connected to blank_db. MAKE NEW ONE FOR LOGIN AND FOR PORTAL HOLDERS";
    echo "add sanitisation model";
    echo "add Bootstrap CDNs";
}