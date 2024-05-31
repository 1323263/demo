<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Эх, прокачу!</title>
    <link rel="stylesheet" href="style1.css">
    <section class="event">
        <div class="content">
            <div class="event">
                <div class="information_event">
                    <h3>Регистрация</h3>
                    <div id="registration">
                    </div>
                </div>
            </div>
            <div class="form">
                <form action="index.php">
                    <label for="name" class="muted">ФИО</label>
                    <input type="text" name="name" id="name">

                    <label for="phone" class="muted">Мобильный телефон</label>
                    <input type="tel" name="phone" id="phone" placeholder="+7 ___ ___ __ __">

                    <label for="name" class="muted">Адрес электронной почты</label>
                    <input type="email" name="name" id="name">

                    <label for="password" class="muted">Пароль</label>
                    <input type="text" name="password" id="password">

                    <label for="passport" class="muted">Серия и номер водительского удостоверения</label>
                    <input type="text" name="passport" id="passport" placeholder="__ __ ______">

                    <button>Зарегистрироваться</button>
                </form>
                <p>Уже зарегистрированы?? <a href="login.php">Авторизация</a></p>
            </div>
        </div>
    </section>
</head>

<body>
