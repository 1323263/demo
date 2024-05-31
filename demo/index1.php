<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div class="container">
    <h2>Форма регистрации</h2>
    <form action="scripts/register.php" method="post">
        <label for="full_name">Полное имя:</label>
        <input type="text" id="full_name" name="full_name" required><br>

        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="phone">Телефон:</label>
        <input type="text" id="phone" name="phone" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="driver_license">Водительское удостоверение:</label>
        <input type="text" id="driver_license" name="driver_license" required><br>

        <button type="submit">Зарегистрироваться</button>
    </form>
    <h3>Уже зарегистрированы? <a href="login.php">Войти</a></h3>
    </div>
</body>
</html>
