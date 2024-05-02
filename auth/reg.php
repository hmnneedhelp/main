<?php

    require_once("db.php");

    $login = $_POST['login'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "INSERT INTO `users` (login , email, password) VALUES ('$login','$email', '$pass')";

    $conn -> query($sql);

    echo "Регистрация успешна"
?>