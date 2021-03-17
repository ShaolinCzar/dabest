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
    <script src="js/jquery.maskedinput.min.js"></script>
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
    <div class="registration">
        <div class="text_1">Судебная защита</div>
        <div class="text_2">авторского права</div>
        <div class="text_3"></div>
        <div class="text_descr" style="line-height: 2vw!important;">
            Данная услуга подходит Вам, если Вы:<br>
            - Автор литературного, музыкального произведения<br>
            - Автор произведения живописи, скульптуры, графики, дизайна, графических рассказов, комиксов, произведения архитектуры, фотографических произведений<br>
            - Автор иного произведения науки, литературы и искусства независимо от достоинств и назначения произведения<br></div>
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
    <div class="defence_information">
    <div class="diheader">Внимание! Важно!</div>
    <button class="didiv1" onclick="didiv1()"><i class="far fa-copyright fa-lg"></i>Защита авторских прав</button>
    <button class="didiv2" onclick="didiv2()"><i class="far fa-gem fa-lg"></i></i>Защита товарного знака</button>
    <button class="didiv3" onclick="didiv3()"><i class="fas fa-crown fa-lg"></i>Защита чести, достоинства и деловой репутации</button>
    </div>   
    <div class="description">
        <div class="didiv1_text none">               
                <p>Согласно разъяснениям, содержащимся в пункте 28 Постановления Пленума Верховного Суда
                     Российской Федерации N 5, Пленума Высшего Арбитражного Суда Российской Федерации N 29 от
                      26 марта 2009 года "О некоторых вопросах, возникших в связи с введением в действие части
                      четвертой Гражданского кодекса Российской Федерации" при анализе вопроса о том, является 
                      ли конкретный результат объектом авторского права, судам следует учитывать, что по смыслу
                       ст. ст. 1228, 1257 и 1259 Гражданского кодекса Российской Федерации в их взаимосвязи 
                       таковым является только тот результат, который создан творческим трудом.</p><br><p>
                    Однако, бывают случаи когда автор хоть и создал на первый взгляд новое произведение своим 
                    творческим трудом, при этом для создания нового произведения взял за основу Ваше произведение. Такие произведения будут являться производными или составными, на это также необходимо получить Ваше согласие.
                        Хоть и нечастыми, но бывают случаи когда два автора заявляют о том, что примерно в одно 
                        время независимо друг от друга создали творческим трудом тождественные произведения. В 
                        этом случае в практике Российских судов отдается предпочтение тому кто раньше создал 
                        произведение, конечно это мягко говоря спорный подход. В практике иностранных государств 
                        существуют специальные процедуры для регистрации прав за одним или обоими авторами, 
                        чем-то схоже с нашим «Преждепользованием», которое применяется в Российском 
                        законодательстве в отношении изобретений или полезных моделей (ст. 1361 Гражданского 
                        кодекса РФ).</p><br><p>
                    Также следует  учитывать, что в силу ч. 5, п. 4 ч. 6 ст. 1259 ГК РФ авторские права не 
                    распространяются на идеи, концепции, принципы, методы, процессы, системы, способы, решения 
                    технических, организационных или иных задач, открытия, факты, языки программирования; не 
                    являются объектами авторских прав: сообщения о событиях и фактах, имеющие исключительно 
                    информационный характер (сообщения о новостях дня, программы телепередач, расписания движения
                     транспортных средств и тому подобное).</p><br><p>
                    Если кто-либо использовал Ваше произведение без Вашего согласия, нарушил Ваше право автора, 
                    то лучшие адвокаты и патентные поверенные юридического бюро «Де-Юрекс» защитят Ваши права в 
                    суде и взыщут с нарушителя компенсацию от 10 тысяч до 5 миллионов рублей за каждый случай 
                    нарушения.
                    </p>                 
            </div>
            <div class="didiv2_text none">
                <p>В соответствии со ст. 1479 ГК РФ, на территории Российской Федерации действует 
                    исключительное право на товарный знак, зарегистрированный федеральным органом исполнительной 
                    власти по интеллектуальной собственности, а также в других случаях, предусмотренных 
                    международным договором Российской Федерации.</p><br><p>
                    Нередко бывают случаи когда Вы зарегистрировали товарный знак, он становится узнаваемым, 
                    ассоциируется у покупателей/потребителей с качественным товаром или услугой и в этот момент 
                    Вы узнаете, что кто-то решил воспользоваться Вашим раскрученным брендом. Лучше сразу 
                    обратиться к Адвокатам и Патентным поверенным «Де-Юрекс», которые помогут молниеносно 
                    собрать доказательства, обратиться в полицию, а также в Арбитражный суд о запрете 
                    использования товарного знака, изъятии контрафактной продукции, а также взыскании 
                    компенсации от 10 тысяч до 5 миллионов рублей за каждый случай нарушения.</p><br><p>
                    В практике нашего бюро «Де-Юрекс» были случаи и наоборот. У Вас нет товарного знака, но 
                    вы используете для продвижения своих услуг определенные словесные обозначения, при этом, 
                    как выясняется позднее, кто-то успел зарегистрировать в качестве словесного обозначения, 
                    которое вы также используете товарный знак и пытается запретить вам использование таких 
                    словесных обозначений. Но и в этом случае специалисты «Де-юрекс» смогут помочь Вам и 
                    защитить свои права, как например в деле рассмотренном Арбитражным судом Санкт-Петербурга 
                    между Санкт-Петербургской сетью кафе «Суши Wok», принадлежащей ООО «Маэстро» против самого 
                    распространенного бренда в России «Суши Wok», принадлежащего ООО "Завод "КРОЛ" ДЕЛО 
                    № А56-23647/2013.
                    </p>
            </div>
            <div class="didiv3_text none">
                <p>Если Ваше имя очернили, Вас оклеветали, сообщили о Вас недостоверные сведения, которые 
                    порочат Ваше честь и достоинство, Вы можете заставить обидчика опровергнуть ложную 
                    информацию и потребовать компенсацию морального вреда.</p><br><p>
                    Доброе имя в бизнесе ценится, порой, гораздо больше финансовых результатов. Хорошая деловая 
                    репутация сегодня – основа успешного ведения бизнеса в будущем. И тем обиднее бывает, когда 
                    из-за недобросовестности конкурентов доброе имя вашей компании ставится под угрозу.
                    Защита деловой репутации дело не такое простое, как может показаться на первый взгляд, 
                    поскольку регулируется Гражданским кодексом, арбитражным законодательством, законодательством
                     о СМИ и даже Уголовным кодексом. В связи с этим, попытки хотя бы на первом этапе решить 
                     вопрос самостоятельно, могут привести вас к большим финансовым потерям.</p><br><p>
                    Так, в соответствии со статьёй 152 Гражданского Кодекса РФ, юридическое лицо может
                    рассчитывать на победу в суде о защите деловой репутации лишь при наличии трёх условий:</p> <br>
                    <h3>•	спорная информация об организации была распространена</h3><br>
                    <h3>•	распространённая информация носит порочащий характер</h3><br>
                    <h3>•	порочащая информация не соответствует действительности. </h3><br>
                    <p>Самым главным для вас будет доказать факт распространения порочащей информации. 
                    Например, если публикацию в СМИ легко можно предъявить в суде, то факт рассылки 
                    порочащих писем или тем более распространение сведений в частных беседах доказать 
                    будет крайне сложно. Именно поэтому и необходимо обращение к нашим адвокатам по 
                    защите чести, достоинства и деловой репутации, поскольку они знают, какие доказательства 
                    распространения недостоверной информации может принять суд, и помогут собрать убедительные 
                    доказательства вашей правоты.</p><br><p>
                    Важно помнить, что защита деловой репутации не ограничивается только гражданским 
                    законодательством. В случае если ложная информация о вас и вашем предприятии была 
                    распространена намеренно, тогда это будет являться основанием для возбуждения уголовного 
                    дела. В этом случае наказание для клеветника, которое он понесёт благодаря работе наших 
                    юристов, может быть очень и очень суровым.
                    </p>
            </div>
            </div>
            <div class="advantages">
                <div class="our_benefits">Наши преимущества</div>
                <div class="benefit1"><span>97%</span></div>
                <div class="benefit2"><span>100%</span></div>
                <div class="benefit3"><span>от 2</span></div>
                <div class="benefit4"><span>100</span></div>
                <div class="description">
                    <div class="benefit_describe1">Успешных <br> регистраций</div>
                    <div class="benefit_describe2">Гарантированная регистрация</div>
                    <div class="benefit_describe3">Экспресс <br> регистрация</div>
                    <div class="benefit_describe4">Государств для регистраций</div>
                </div> 
            </div>
    <div class="consult_button">
        <a href="#anchor"><button id="consult_button">Получить бесплатную консультацию</button></a>
    </div>
    <div class="prices">
        <div class="prices_header">Стоимость регистрации автосрких прав</div>
        <div class="price1">
            <div class="price1header"><?$p1h = "Первый вариант"; echo $p1h; global $p1h;?> <br> за 3-5 дней</div>
            <div class="price1description1">- Ускоренный сбор и составление документов, необходимых 
                для регистрации произведения
            </div>
            <div class="price1description2">- Заключение договора с РАО от имени автора</div>
            <div class="price1description3">- Получение свидетельства о регистрации авторских прав</div>
            <div class="price1price">От <?$firstPrice = 30000; echo $firstPrice; global $firstPrice;?> руб</div>
            <button id="price_submit" class="sub1" onclick="first_price()">Заказать</button>
            <button id="price_submitted" class="done1">Выбрано</button>
        </div>
        <div class="price2">
            <div class="price1header"><?$p2h = "Второй вариант"; echo $p2h;?> <br> за 3-5 дней</div>
            <div class="price1description1">- Ускоренный сбор и составление документов, необходимых 
                для регистрации произведения
            </div>
            <div class="price1description2">- Заключение договора с РАО от имени автора</div>
            <div class="price1description3">- Получение свидетельства о регистрации авторских прав</div>
            <div class="price1price">От <?$secondPrice = 25000; echo $secondPrice;?> руб</div>
            <button id="price_submit" class="sub2" onclick="second_price()">Заказать</button>
            <button id="price_submitted" class="done2">Выбрано</button>
        </div>
        <div class="price3">
            <div class="price1header"><?$p3h = "Третий вариант"; echo $p3h;?> <br> за 3-5 дней</div>
            <div class="price1description1">- Ускоренный сбор и составление документов, необходимых 
                для регистрации произведения
            </div>
            <div class="price1description2">- Заключение договора с РАО от имени автора</div>
            <div class="price1description3">- Получение свидетельства о регистрации авторских прав</div>
            <div class="price1price">От <?$thirdPrice = 40000; echo $thirdPrice;?> руб</div>
            <button id="price_submit" class="sub3" onclick="third_price()">Заказать</button>
            <button id="price_submitted" class="done3">Выбрано</button>
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
        <button class="service2" onclick="window.location='international_registration.php'">
        <span><i class="fas fa-globe fa-2x" aria-hidden="true"></i></span>
            <div class="service_header">Международная регистрация авторских прав</div>
            <div class="service_content">Регистрация авторского права в библиотеке Конгресса США
            </div>
            <div class="service_price">От 15 000 руб</div>
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
        <div class="adress">191014, г Санкт-Петербург, переулок Сапёрный, дом 6, литер А, помещение 38н</div>        <div class="mylo">deureks@deureks.ru</div>
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