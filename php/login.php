<?php
    $host = 'localhost';
    $db = 'web_therapy';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try {
        $pdo = new PDO($dsn, $user, $password);

        if ($pdo) {
            echo "Connected to $db database";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>