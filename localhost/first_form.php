<?
                $message = "Пользователь с именем ".$_POST['name']." оставил заявку на консультацию. Его номер: ".$_POST['phone'].".";
                $to = "shaolin.czar@gmail.com";
                $from = "";
                $subject = "Запрос на консультацию";
                $subject = "=?utf-8?B?".base64_encode($subject)."?=";
                $headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
                mail($to, $subject, $message);
            ?>