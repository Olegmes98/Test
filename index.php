<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Тестовое Задание</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
<form id="formRegiseter" class="text-center">
    <div id="message_error" class="text-danger"></div>
    <label for="name">Имя:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="surname">Фамилия:</label><br>
    <input type="text" id="surname" name="surname" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Пароль:</label><br>
    <input type="password" id="password" name="password" required><br><br>

    <label for="confirm_password">Повторите пароль:</label><br>
    <input type="password" id="confirm_password" name="confirm_password" required><br><br>

    <input type="button" name="done" id="done" value="Регистрация">
</form>
<div id="intro" class="text-center">
    <label for="name">Вы успешно зарегистрировались!</label>
</div>
</body>
</html>