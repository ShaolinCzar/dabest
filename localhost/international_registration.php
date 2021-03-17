<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Де-Юрекс</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/png">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script>
    function showhider(){
        $('.hider, .callback').removeClass('invisible');
    }
    function hider(){
        $('.hider, .callback').addClass('invisible'); 
    }
    </script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LeJ8Y8UAAAAAD1kKLzpVFM0qh5ws0XXOT-EISpI"></script>
    <script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6LeJ8Y8UAAAAAD1kKLzpVFM0qh5ws0XXOT-EISpI', {action: 'homepage'}).then(function(token) {
           ...
        });
    });
    </script>
</head>
<body>
    <div class="header" id="anchor">
        <div class="logo" onclick="window.location='index.php'"></div>
        <div class="header_span1"><span>Де-Юрекс</span></div>
        <div class="header_span2"><span>Юридическое бюро</span></div>
        <button id="header_button" onclick="showhider()">Заказать звонок</button>
        <div class="header_span3"><span>пн-пт с 9:00 до 20:00</span></div>
        <div class="header_span4"><span>+7 (812) 942-32-90</span></div>
    </div>
    <div class="defence" onclick="window.location='defence.php'">Нужна защита в суде? Мы Вам поможем!</div>
    <div class="registration">
        <div class="text_1">Международная регистрация авторского права</div>
        <div class="text_2">Регистрация авторского права</div>
        <div class="text_3">в библиотеке Конгресса США</div>
        <div class="text_descr">
            - Регистрация от 3-х месяцев<br>
            - Стоимость от 15 000 рублей<br>
            - Ежегодно консультируем более 3500 клиентов<br>
            - Сопровождение на всех этапах регистрации в России и за рубежом</div>
            <div class="success"><span><i class="far fa-check-circle fa-5x" aria-hidden="true"></i></span>Ваш запрос принят! Наши специалисты 
            свяжутся с Вами в скором времени!</div>
            <div class="reg_form animated">
                <form id="form">
                <div class="reg_text">Получите бесплатную консультацию <br>специалиста</div>
                <input type="text" id="reg_name" name="name" placeholder="Имя" required>
                <input type="text" id="reg_phone" name="phone" placeholder="Телефон" required>
                <button id="reg_button" name="reg_button" type="submit">Получить консультацию</button>
            </form>
            <?
            if(isset($_POST['name']) & isset($_POST['phone'])){
                $message = "Пользователь с именем ".$_POST['name']." оставил заявку на консультацию. Его номер: ".$_POST['phone'].".";
                $to = "cerxun@yandex.ru";
                $from = "";
                $subject = "Запрос на консультацию";
                $subject = "=?utf-8?B?".base64_encode($subject)."?=";
                $headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
                mail($to, $subject, $message);
            }
            ?>
            </div>
        </div>
    <div class="owl-carousel owl-theme">
        <div class="slider1">КАК ПРОИСХОДИТ МЕЖДУНАРОДНАЯ РЕГИСТРАЦИЯ<br>АВТОРСКОГО ПРАВА?</div>
        <div class="slider2">
            <div class="title">Получение информации по объекту регистрации</div>
            <div class="slider_descr">- Направление информации по объекту регистрации <br>- Консультация специалиста</div>
            <div class="uget">Вы получаете консультацию эксперта по защите авторских прав</div>
            <div class="deadline">сроки: от 1 дня</div>
        </div>
        <div class="slider3">
            <div class="title">Подготовка документов на регистрацию авторских прав</div>
            <div class="slider_descr">- Сбор и заполнение документов, необходимых для регистрации <br>
            - Направление анкеты и произведения в Copyryght Office при библиотеке Конгресса США</div>
            <div class="uget">Вы получаете консультацию эксперта по защите авторских прав</div>
            <div class="deadline">сроки: от 15 дней</div>
        </div>
        <div class="slider4">
            <div class="title">Международная регистрация авторских прав</div>
            <div class="slider_descr">- Оплата госпошлины <br>- Получение Свидетельства о регистрации авторских прав</div>
            <div class="uget">Вы получаете международное Свидетельство на регистрацию авторских прав на произведение</div>
            <div class="deadline">сроки: 2-3 месяца</div>
        </div>
    </div>
    <div class="advantages">
        <div class="our_benefits">Наши преимущества</div>
        <div class="benefit1"><span>97%</span></div>
        <div class="benefit2"><span>30%</span></div>
        <div class="benefit3"><span>2</span></div>
        <div class="benefit4"><span>152</span></div>
        <div class="description">
            <div class="benefit_describe1">Успешных <br> регистраций</div>
            <div class="benefit_describe2">Скидка на<br>оплату госпошлин</div>
            <div class="benefit_describe3">Месяца экспресс <br> регистрация</div>
            <div class="benefit_describe4">Государств для регистраций</div>
        </div> 
    </div>
    <div class="consult_button">
        <a href="#anchor"><button id="consult_button">Получить бесплатную консультацию</button></a>
    </div>
    <div class="prices">
        <div class="prices_header">Стоимость регистрации автосрких прав</div>
        <div class="price2">
            <div class="price1header"><?$p2h = "Международная регистрация авторских прав"; echo $p2h;?></div>
            <div class="price1description1">- Анализ информации по объекту регистрации<br>- Сбор и заполнение документов, необходимых для регистрации
            </div>
            <div class="price1description2">- Направление анкеты и произведения в Copyryght Office 
                при библиотеке Конгресса США</div>
            <div class="price1description3">- Получение Свидетельства о регистрации авторского права </div>
            <div class="price1price">От <?$secondPrice = 25000; echo $secondPrice;?> руб</div>
            <button id="price_submit" class="sub2" onclick="second_price()">Заказать</button>
            <button id="price_submitted" class="done2">Выбрано</button>
        </div>
    </div>
    <div class="services">
        <div class="additional">Дополнительные услуги</div>
        <button class="service1" onclick="window.location='right_protection.php'">
        <span><i class="fas fa-lock fa-2x" aria-hidden="true"></i></span> 
            <div class="service_header">Защита авторского права</div>
            <div class="service_content">Регистрация авторского права в России и за рубежом. <br> Защита 
                авторских прав в суде
            </div>
            <div class="service_price">От 40 000 руб</div>
        </button>
        <button class="service2" onclick="window.location='index.php'">
        <span><i class="far fa-copyright fa-2x" aria-hidden="true"></i></span>
            <div class="service_header">Регистрация авторского права</div>
            <div class="service_content">Регистрация авторского права в России <br>и за рубежом.
            </div>
            <div class="service_price">От 40 000 руб</div>
        </button>
        <button class="service3" onclick="window.location='right_owner.php'">
        <span><i class="fas fa-hand-holding fa-2x" aria-hidden="true"></i></span>
            <div class="service_header">Установление правообладателя</div>
            <div class="service_content">Установление правообладателя в судe <br>
            Взыскание материальной ответственности за нарушение авторских прав
            </div>
            <div class="service_price">От 60 000 руб</div>
        </button>
        <button class="service4" onclick="window.location='confession.php'">
        <span><i class="fas fa-balance-scale fa-2x" aria-hidden="true"></i></span>
            <div class="service_header">Признание авторских прав</div>
            <div class="service_content">Признание авторских прав в судe<br>Взыскание материальной ответственности за нарушение авторских прав
            </div>
            <div class="service_price">От 60 000 руб</div>
        </button>
        <button class="service5" onclick="window.location='depositing.php'">
        <span><i class="fas fa-gavel fa-2x" aria-hidden="true"></i></span>
            <div class="service_header">Депонирование</div>
            <div class="service_content">Официальное закрепление авторских прав на неопубликованное произведение<br>
            Передача произведения на ответственное хранение в РАО
            </div>
            <div class="service_price">От 3 000 руб</div>
        </button>
    </div>
    <div class="add_inf">
            <div class="success"><span><i class="far fa-check-circle fa-5x" aria-hidden="true"></i></span>Ваш запрос принят! Наши специалисты 
                свяжутся с Вами в скором времени!</div>
        <div class="reg_form add animated" style="box-shadow: 0 0 10px black!important">
                <form id="form1">
                    <div class="reg_text">Получите бесплатную консультацию <br>специалиста</div>
                    <input type="text" id="reg_name" name="name" placeholder="Имя" required>
                    <input type="text" id="reg_phone" name="phone" placeholder="Телефон" required>
                    <button id="reg_button" type="submit">Получить консультацию</button>
                </form>
        </div>
        <div class="add_inf_text">За время работы нами успешно зарегистрировано <br> <span>+3000</span><br> произведений 
        в России и за рубежом</div>
    </div>
    <div class="map" id="cb">
        <div class="map_container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1998.4553923354317!2d30.354512316114516!3d59.94117866885578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4696319f71bea819%3A0x2bf8c3ac6a90aa8!2z0JTQtS3RjtGA0LXQutGB!5e0!3m2!1sru!2sby!4v1551871780932" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>        </div>
        <div class="map_logo"></div>
        <div class="comp_name">Де-Юрекс <br>Юридическое бюро</div>
        <div class="social_div1">
            <div class="social1"><span><a href="https://vk.com/de_jurex" target="_blank" style="color: blue;"><i class="fab fa-vk fa-2x" aria-hidden="true"></i></a></span></div>
            <div class="social2"><span><a href="https://www.facebook.com/dejurex/" target="_blank" style="color: grey;"><i class="fab fa-facebook-f fa-2x" aria-hidden="true"></i></a></span></div>
            <div class="social3"><span><a href="https://t.me/deureks" target="_blank" style="color: rgb(36, 192, 231);"><i class="fab fa-telegram-plane fa-2x" aria-hidden="true"></i></a></span></div>
        </div>
        <div class="social_div2">
            <div class="social4"><span><a href="https://www.instagram.com/de_ureks/" style="color: red;" target="_blank"><i class="fab fa-instagram fa-2x" aria-hidden="true"></i></a></span></div>
            <div class="social5"><span><a href="https://m.ok.ru/group/54898813566989?__dp=y" target="_blank" style="color: rgb(243, 173, 43);"><i class="fab fa-odnoklassniki fa-2x" aria-hidden="true"></i></a></span></div>
        </div>
        <div class="number">+7 (499) 520-26-14</div>
        <div class="adress">191014, г Санкт-Петербург, переулок Сапёрный, дом 6, литер А, помещение 38н</div>
        <div class="mylo">deureks@deureks.ru</div>
    </div>
    <div class="hider invisible animated">
        <div class="callback animated invisible">
            <i class="fa fa-times" aria-hidden="true" onclick="hider()"></i>
            <form id="callback_form">
                <span>Обратная связь</span>
                <input type="text" name="name" placeholder="Ваше имя" required>
                <input type="text" name="phone" placeholder="Ваш номер телефона" required>
                <input type="checkbox" id="check" required>
                <label for="check" style="text-align: right;">Я согласен с условиями сайта</label>
                <button type="submit">Отправить</button>
            </form>
        </div>
        <div class="first_price invisible"><span>Вы выбрали <? echo $p1h;?> стоимостью <? echo $firstPrice;?>
            <br>Для оформления заказа введите ваши данные для обратной связи нашего специалиста.</span>
            <form id="price1">
                <input type="text" placeholder="Введите ваш номер" name="phone" required>
                <input type="text" placeholder="Ваше имя" name="name" required>
                <button type="submit">Отправить заказ</button>
                <i class="fa fa-times" aria-hidden="true" onclick="hider_1()"></i>
            </form></div>
            <div class="second_price invisible"><span>Вы выбрали <? echo $p2h;?> стоимостью <? echo $secondPrice;?>
            <br>Для оформления заказа введите ваши данные для обратной связи нашего специалиста.</span>
                <form id="price2">
                    <input type="text" placeholder="Введите ваш номер" name="phone" required>
                    <input type="text" placeholder="Ваше имя" name="name" required> 
                    <button type="submit">Отправить заказ</button>
                    <i class="fa fa-times" aria-hidden="true" onclick="hider_2()"></i>
                </form></div>
            <div class="third_price invisible"><span>Вы выбрали <? echo $p3h;?> стоимостью <? echo $thirdPrice;?>
            <br>Для оформления заказа введите ваши данные для обратной связи нашего специалиста.</span>
                <form id="price3">
                    <input type="text" placeholder="Введите ваш номер" name="phone" required>
                    <input type="text" placeholder="Ваше имя" name="name" required>
                    <button type="submit">Отправить заказ</button>
                    <i class="fa fa-times" aria-hidden="true" onclick="hider_3()"></i>
                </form></div>
    </div>
</body>
</html>