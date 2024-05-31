<?php
// Включаем файл подключения к базе данных
require 'connect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $pass = $_POST['password'];
    $full_name = $_POST['full_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $driver_license = $_POST['driver_license'];
    $id_role = 1;

    // SQL-запрос для вставки данных
    $sql = "INSERT INTO user (id_role, password, full_name, phone, email, driver_license) VALUES (:id_role, :password, :full_name, :phone, :email, :driver_license)";
    
    // Подготовка запроса
    $stmt = $conn->prepare($sql);
    
    // Привязка параметров
    $stmt->bindParam(':id_role', $id_role);
    $stmt->bindParam(':password', $pass);
    $stmt->bindParam(':full_name', $full_name);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':driver_license', $driver_license);

    // Выполнение запроса
    if ($stmt->execute()) {
        echo "Регистрация прошла успешно!";
        $_SESSION['user_id'] = $conn->lastInsertId(); // Получаем ID нового пользователя
        $_SESSION['user_name'] = $full_name;
        $_SESSION['user_role'] = $id_role;
        header("Location: ../main.php");
    } else {
        echo "Ошибка при регистрации.";
    }
}
?>
