<?php 
    $title = 'Контакты';
    include($_SERVER['DOCUMENT_ROOT'].'/src/php/parts/header.php');
?>
    <main class='contacts-page'>
        <div class="banner">
            <div class="wrapper banner-inner">
                <div class="banner-inner-header">
                    <h1>MyMoscow</h1>
                    <p>агенство интересных маршрутов</p>
                    <p>-Контакты-</p>
                </div>
            </div>
        </div> 
        <div class="wrapper-big contacts">
            <h2>Контакты</h2>
            <p>Мы - команда тех, кто любит историю и любит Москву. </p>
            <p>Москва – это не только место по «заколачиванию денег» и «взращиванию карьеры», а еще и бесконечно красивые памятники природы, заказники, парки, заповедники. Активный отдых в Москве и Подмосковье – это отличная возможность вырваться из душного мегаполиса куда-нибудь в «дебри», навстречу приключениям. К счастью, не все Подмосковье еще «облагорожено» асфальтными дорожками и высоченными коттеджными заборами. Еще встречаются места, настолько глухие и далекие, что, очутившись там, кажется, что ты – первый человек, ступивший на эту землю.</p>
            <p>Там, где не проедет автомобилист и даже велосипедист, найдет лазейку и откроет для себя все красоты 100% бездорожья турист, проводящий свой активный отдых в Подмосковье.</p>
            <div class="contacts-employee">
                <div class="contacts-employee-inner">
                    <div class="employee-photo ceo"></div>
                    <div class="employee-info">
                        <h4>Александр Рыбаков</h4>
                        <p class='position'>директор</p>
                        <p>По всем вопросам пишите на почту:</p>
                        <a href="mailto:rybakov@mymoscow.ru">rybakov@mymoscow.ru</a>
                    </div>
                </div>
                <div class="contacts-employee-inner">
                    <div class="employee-photo corp-manager"></div>
                    <div class="employee-info">
                        <h4>Елена Белкина</h4>
                        <p class='position'>руководитель корпоративного отдела</p>
                        <p>По всем вопросам пишите на почту:</p>
                        <a href="mailto:belkina@mymoscow.ru">belkina@mymoscow.ru</a>
                    </div>
                </div>
            </div>
            <div class="contact-us">
                <div class="contact-us-link">
                    <a href='https://yandex.ru/maps/-/CGGAiZ3-' target='_blank' class='contact-us-link-inner'>
                        <div class="contact-us-link-inner-img address"></div>
                        <div class="contact-us-link-inner-info">
                            <p>Москва,</p>
                            <p>Большая Спасская 12</p>
                        </div>
                    </a>
                    <a href='mailto:info@mymoscow.ru' class='contact-us-link-inner'>
                        <div class="contact-us-link-inner-img mail"></div>
                        <div class="contact-us-link-inner-info">
                            <p>E-mail:</p>
                            <p>info@mymoscow.ru</p>
                        </div>
                    </a>
                    <a href="tel:+74956264600" class='contact-us-link-inner'>
                        <div class="contact-us-link-inner-img phone"></div>
                        <div class="contact-us-link-inner-info">
                            <p>Телефон:</p>
                            <p>8 (495) 626-46-00</p>
                        </div>
                    </a>
                </div>
                <div class="contact-us-form">
                    <p>Напишите нам</p>
                    <form class='contact-us-form-inner' action="/form.php" method="POST">
                        <input type="text" name='fio' placeholder="ФИО" value="">
                        <input type="email" name='email' placeholder="E-mail">
                        <textarea maxlength='140' name="message" placeholder="Ваше сообщение" ></textarea>
                        <button type="submit">отправить</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aed46b5b2b1a695f0d85fb9cdc69b0acdbdb7d886238f2e8b957dcb7119071f25&amp;width=100%25&amp;height=570&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
    </main>   
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/php/parts/footer.php'); ?>