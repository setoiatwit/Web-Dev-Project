<?php
    try {
        $host = 'localhost';
        $db = 'web_therapy';
        $user = 'root';
        $password = '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $pdo = new PDO($dsn, $user, $password);

        if ($pdo) {
            echo "Connected to $db database";
            echo "<br>";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>