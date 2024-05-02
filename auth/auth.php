<?php

    require_once("db.php");

    $login = $_POST['login'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM `users` WHERE login= '$login' AND password = '$pass' ";

    $result = $conn -> query($sql);

    if ($result ->num_rows >0){
        while($row = $result->fetch_assoc()){   
        echo "Добро пожаловать " .$row['login'] , " ваша почта: ".$row['email'];
        }
    } else{
        echo "нет такого пользователя";
    }
?>