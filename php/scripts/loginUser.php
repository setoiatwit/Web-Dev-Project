<?php
if (isset($_POST["submit"])) {
    echo "Form Submitted";
    echo "<br>";
    if ($_POST["username"] == "" or $_POST["password"] == "") {
        echo "<center><h1>Form is empty<h1></center>";
    }
    else {
        require_once 'connectToDB.php';
        $username = $_POST["username"];
        $password = $_POST["password"];
        echo 'username: '.$username;
        echo "<br>";
        echo 'password: '.$password;
        echo "<br>";
        
        // create
        $query = $pdo -> prepare('SELECT password FROM users WHERE username = ?;');
        // execute
        $query -> execute(array($username, $password));

        if ($query -> rowCount() == 0) {
            $query = null;
            header('location: index.php');
            exit();
        }

        $hashedPassword = $query -> fetchAll(PDO::FETCH_ASSOO);
        $checkPassword = password_verify($password, $hashedPassword[0]["password"]);

        if ($checkPassword == false) {
            $query = null;
            exit();
        }
        else {
            $query = $pdo -> prepare('SELECT * FROM users WHERE username = ? AND password = ?;');
            $query -> execute(array($username, $password));
            if ($query -> rowCount() == 0) {
                $query = null;
                header('location: index.php');
                exit();
            }
            $user = $query -> fetchAll(PDO::FETCH_ASSOO);
            session_start();
            $_SESSION["user"] = $user[0]["userId"];
            $_SESSION["user"] = $user[0]["username"];
            header('location: index.php');
        }

        $query = null;

        echo "<center><h1>BAD<h1></center>";
    }
}
?>