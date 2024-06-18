<?php

try {
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
    $db = new PDO('mysql:host=database;dbname=demo_pdo;charset=utf8', 'root', 'example', $options);
} catch (\PDOException $e) {
    echo sprintf('La connexion a échoué avec les message %s', $e->getMessage());
    die();
}
