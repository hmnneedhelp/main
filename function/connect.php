<?php
    $host_name = "localhost";
    $username = "root";
    $password = "";
    $server_name = "graduation";

    $conn = new mysqli($host_name, $username, $password, $server_name);

    if($conn->connect_error){
        die("Ошибка подключения к базе");
    } else {
        echo "Подключение удалось";
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Запрос на добавление данных в базу данных
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>