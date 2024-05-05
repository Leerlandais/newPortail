<?php

function getAllVisiblePortals(PDO $db) : array | bool {
    $sql = "SELECT *
            FROM `portals`
            WHERE `visible` = 1";
       try{        
        $query = $db->query($sql);
            if($query->rowCount()===0) return false;
        $result = $query->fetchAll();
            $query->closeCursor();
        return $result;

    }catch(Exception $e) {
        return $e->getMessage();
    }

}