<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    setcookie("user_name", $name, time() + (86400 * 30), "/");   
    setcookie("user_email", $email, time() + (86400 * 30), "/"); 
    setcookie("user_password", $password, time() + (86400 * 30), "/"); 
}



    

?>