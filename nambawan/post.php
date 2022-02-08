<?php
        $to = "your_email_here";
        $message = "Поступил заказ с Вашего личного сайта\r\n 
        Данные посетителя:\r\n Имя клиента: ".$_POST['name']."; 
        Электронная почта клиента: ".$_POST['email'].".";
        $from = "";
        $subject = "Заказ на чёткий трип";
        $subject = "=?utf-8?B?".base64_encode($subject)."?=";
        $headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
        mail($to, $subject, $message);
    ?>