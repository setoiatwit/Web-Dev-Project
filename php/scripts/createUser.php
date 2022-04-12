<?php
if (isset($_POST["submit"])) {
    echo "Form Submitted";
    echo "<br>";
    if ($_POST["fullname"] == "" or $_POST["username"] == "" or $_POST["password"] == "" or $_POST["username"] == "") {
        echo "<center><h1>Form is empty<h1></center>";
    }
    else {
        require_once 'connectToDB.php';
        $userId = uniqid();
        $fullname = $_POST["fullname"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        echo 'userid: '.$userId;
        echo "<br>";
        echo 'fullname: '.$fullname;
        echo "<br>";
        echo 'username: '.$username;
        echo "<br>";
        echo 'password: '.$password;
        echo "<br>";

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        echo 'hashed password: '.$hashedPassword;
        echo "<br>";

        
        // create query
        $query = $pdo -> prepare('INSERT INTO users (userId, fullname, username, password) VALUES (?, ?, ?, ?)');
        // execute query
        $query -> execute(array($userId, $fullname, $username, $hashedPassword));

        //header("location: login.php");
    }
}
?>