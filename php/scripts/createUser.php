<?php
if (isset($_POST["submit"])) {
    if ($_POST["fullname"] == "" or $_POST["username"] == "" or $_POST["password"] == "" or $_POST["username"] == "") {
        echo "<center><h1>Form is empty<h1></center>";
    }
    else {
        require_once 'connectToDB.php';
        $userId = uniqid();
        $fullname = $_POST["fullname"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $query = $pdo -> prepare('INSERT INTO users (userId, fullname, username, password) VALUES (?, ?, ?, ?)');
        $query -> execute(array($userId, $fullname, $username, $hashedPassword));

        //header("location: login.php");
    }
}
?>