<?php
include "index.php";
$name = $_POST['name'];
$phone = $_POST['phone'];
$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$name = urldecode($name);
$phone = urldecode($phone);
$name = trim($name);
$phone = trim($phone);

mail("cerxun@yandex.ru", "Запрос на обратную связь", "Поступила заявка на обратную связь от пользователя со следующими введёнными данными: 
    Имя:".$name.". Номер телефона: ".$phone ,". From: me \r\n");
?>