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
                    <h3>Вход</h3>
                    <div id="registration">
                    </div>
                </div>
            </div>
            <div class="form">
                <form action="index.php">


                    <label for="name" class="muted">Адрес электронной почты</label>
                    <input type="email" name="name" id="name">

                    <label for="password" class="muted">Пароль</label>
                    <input type="text" name="password" id="password">
                     <button>Войти</button>
                </form>
                <p>Ещё не зарегистрированы? <a href="registration.php">Регистрация</a></p>
            </div>
        </div>
    </section>
</head>

<body>
