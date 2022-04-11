<?php

class DBConnect {

    private function connect() {

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
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }
}

?>