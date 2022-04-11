<?php

function signUpInputEmpty() {
    $isEmpty;

    if (empty($first) || empty($last) || empty($username) || empty($password)) {
        return true;
    }
    else {
        return false;
    }

    return $isEmpty;
}

function firstNameInputEmpty() {
    $isEmpty;

    if (empty($first)) {
        return true;
    }
    else {
        return false;
    }

    return $isEmpty;
}

function lastNameInputEmpty() {
    $isEmpty;

    if (empty($last)) {
        return true;
    }
    else {
        return false;
    }

    return $isEmpty;
}

function usernameInputEmpty() {
    $isEmpty;

    if (empty($username)) {
        return true;
    }
    else {
        return false;
    }

    return $isEmpty;
}

function passwordInputEmpty() {
    $isEmpty;

    if (empty($password)) {
        return true;
    }
    else {
        return false;
    }

    return $isEmpty;
}

function craeteUser() {
    $query = "INSERT INTO users (first, last, username, password) VALUES (?, ?, ?, ?);";
}

?>