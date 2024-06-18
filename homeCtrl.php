<?php
require './database.php';

try {
    $sql = "SELECT * FROM `users`";
    
    $stmt = $db->query($sql);
    
    $users = $stmt->fetchAll(PDO::FETCH_OBJ);
} catch (\PDOException $e) {
    //throw $th;
}

$title = 'Accueil';

require_once './home.php';

require_once './template.php';
