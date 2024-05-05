<?php

function addNewItemToPortal (PDO $db, string $title, string $desc, string $img, string $url) : bool | string {
    $sql = "INSERT INTO `portals`
                    (`title`, `description`, `img_src`, `dest_url`) 
            VALUES  (?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(1, $title);
    $stmt->bindValue(2, $desc);
    $stmt->bindValue(3, $img);
    $stmt->bindValue(4, $url);

    try {
        $stmt->execute();
        if($stmt->rowCount()===0) return false;

            return true;
    }catch(Exception $e) {
        return $e->getMessage();
    }
}