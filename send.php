<?php
include('BD.php');      //массив

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$logMessage = ""; // Переменная для хранения сообщения для лога

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //Валидация почты
    $logMessage = date("[Y-m-d H:i:s]") . "Ошибка валидации: Неверный формат email у пользователя $name\n";
    echo "error_email";
} elseif ($password !== $confirm_password) {    //Повтор пароля
    $logMessage = date("[Y-m-d H:i:s]") . "Ошибка валидации: Пароли пользователя $name не совпадают\n";
    echo "error_password";
} else {
    foreach ($users as $user) {
        if ($user['email'] === $email) {       //поиск совпадений почты в массиве
            $logMessage = date("[Y-m-d H:i:s]")."Ошибка Email: Email $email уже занят\n";
            echo "repeated_email";
            break;
        }
        else{
            $logMessage = date("[Y-m-d H:i:s]")."Регистрация: Email $email зарегистрировался\n";
        }
    }
}

// Запись в лог файл
$logFile = 'log/log.txt';
file_put_contents($logFile,$logMessage, FILE_APPEND);
?>
