<?php
$servername = "localhost"; // Имя сервера
$username = "root"; // Имя пользователя базы данных
$password = "mysql"; // Пароль пользователя базы данных
$dbname = "cardemo"; // Имя базы данных

try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connected successfully"; 
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}



?>
