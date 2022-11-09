<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>
    <title>Ефимов A.Н</title>

    <?php wp_head(); ?>
</head>
<body>


    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <div class="header__img"><a href="index.html"><img src="<?php the_field('logo', 74) ?>" alt=""></a></div>
                <nav class="header__nav">
                    <div class="header__item"> <a href="index.html">Главная</a></div>
                    <div class="header__item"> <a href="about/">О клинике</a></div>
                    <div class="header__item">
                        <div class="header__dropdown"> <button class="header__dropdown-toggle"
                                data-path="one">Услуги</button> </div>
                        <ul class="header__dropdown-menu" data-target="one">
                            <div class="header__dropdown-item header__nav-item"><a
                                    href="slider-item1.html">Ортопедия</a></div>
                            <div class="header__dropdown-item header__nav-item"><a href="slider-item2.html">Хирургия</a>
                            </div>
                            <div class="header__dropdown-item header__nav-item"><a
                                    href="slider-item3.html">Дерматология</a></div>
                            <div class="header__dropdown-item header__nav-item"><a
                                    href="slider-item4.html">Диагностика</a></div>
                            <div class="header__dropdown-item header__nav-item"><a href="slider-item5.html">Терапия</a>
                            </div>
                        </ul>
                    </div>
                    <div class="header__item"> <a href="price/">Прайс</a></div>
                    <div class="header__item"> <a href="article.html">Cтатьи Ефимова А.Н</a></div><a
                        class="header__call" href="tel:+79219312195"><img src="<?php the_field('call', 74); ?>" alt=""></a>
                </nav>
                <div class="header__burger"><span> </span><span> </span><span> </span></div>
            </div>
        </div>
        <div class="subheader">
            <div class="container">
                <div class="subheader__wrapper">
                    <div class="subheader__time">
                        <p><?php the_field('schedule', 74); ?> </p>
                    </div>
                    <div class="subheader__numbers"> <a href="tel:+78129312195"><?php the_field('phone1', 74); ?> </a><a
                            href="tel:+78124956569"><?php the_field('phone2', 74); ?> </a></div>
                </div>
            </div>
        </div>
    </header>