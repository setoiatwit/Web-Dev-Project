<?php

if (isset($_POST["submit"])) {
    echo "It works";
    $name = $_POST["submit"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'connectToDB.php';
    require_once 'conditionChecker.php';

    if (signUpInputEmpty($first, $last, $username, $password) !== false ) {
        header("location: ../signUp.php");
        exit();
    }
    if (firstNameInputEmpty($first) !== false ) {
        header("location: ../signUp.php");
        exit();
    }
    if (lastNameInputEmpty($last) !== false ) {
        header("location: ../signUp.php");
        exit();
    }
    if (usernameInputEmpty($username) !== false ) {
        header("location: ../signUp.php");
        exit();
    }
    if (passwordInputEmpty($password) !== false ) {
        header("location: ../signUp.php");
        exit();
    }

    createUser($pdo, $first, $last, $username, $password);

}
else {
    header("location: ../signUp.php");
    exit();
}

?>