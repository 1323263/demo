<?php

require 'connect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM user WHERE email = :email AND password = :password";
    

    $stmt = $conn->prepare($sql);
    

    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);


    $stmt->execute();
    

    $user = $stmt->fetch();


    if ($user) {
        echo "Авторизация успешна! Добро пожаловать, " . $user['full_name'] . "!";
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['full_name'];
        $_SESSION['user_role'] = $id_role;
        header("Location: ../main.php");
    } else {
        echo "Неверный email или пароль.";
    }
}
?>
