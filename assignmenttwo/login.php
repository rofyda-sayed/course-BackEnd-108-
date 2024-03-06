<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $cookieEmail = $_COOKIE['user_email'];
    $cookiePassword = $_COOKIE['user_password'];
    $cookieName = $_COOKIE['user_name'];
    if ($email === $cookieEmail && $password === $cookiePassword) {
        echo "Welcome" . " " . $cookieName;
    }
}
