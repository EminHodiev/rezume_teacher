<?php
// Указываем параметры соединения с базой данных
$host = 'localhost';    // Хост базы данных
$user = 'root';         // Имя пользователя базы данных
$password = '';         // Пароль пользователя базы данных
$database = 'project';   // Название базы данных

// Попытка установить соединение с базой данных с использованием параметров
try {
    $con = mysqli_connect($host, $user, $password, $database);
} catch (Exception $e) {
    // В случае ошибки при установке соединения, завершаем выполнение с выводом сообщения
    die("Error:" . $e);
}

// Если соединение установлено успешно, можно вывести сообщение о успешном подключении (закомментировано)
//echo "Connected";
?>
