<?php
session_start(); 


if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); 
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Main</title>
</head>
<body>
    <div class="container">
        <h2>Приветствуем, <?php echo $_SESSION['user_name']; ?>!</h2>
        <p>
            <a href="orders.php">Заказы</a><br>
            <a href="checkout.php">Оформить заказ</a><br>
            <?php if ($_SESSION['user_role'] == 2): ?>
                <a href="admin.php">Администрирование</a><br>
            <?php endif; ?>
        </p>
    </div>
</body>
</html>
