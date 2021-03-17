<?php
        $to = "device@mail.org";
        $message = "Была заказана обратная связь.\r\n 
        Данные посетителя:\r\n Имя клиента: ".$_POST['name']."; 
        Электронная почта клиента: ".$_POST['email'].".";
        $from = "";
        $subject = "Заказ обратной связи";
        $subject = "=?utf-8?B?".base64_encode($subject)."?=";
        $headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
        mail($to, $subject, $message);
    ?>