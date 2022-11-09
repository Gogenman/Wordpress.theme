<?php get_header(); ?>

<?php
/* Template Name: about */
?>

<nav class="header__nav-mobile">
    <div class="header__nav-item"> <a href="index.html">Главная</a></div>
    <div class="header__nav-item"><a href="about.html">О клинике</a></div>
    <div class="header__nav-item"><a href="article.html">Cтатьи Ефимова А.Н</a></div>
    <div class="header__nav-item"><a href="price.html">Прайс-лист</a></div>
    <div class="header__nav-item">
        <p>Наши услуги:</p>
    </div>
    <div class="header__nav-item"><a href="slider-item1.html">Ортопедия</a></div>
    <div class="header__nav-item"><a href="slider-item2.html">Хирургия</a></div>
    <div class="header__nav-item"><a href="slider-item3.html">Дерматология</a></div>
    <div class="header__nav-item"><a href="slider-item4.html">Диагностика</a></div>
    <div class="header__nav-item"><a href="slider-item5.html">Терапия</a></div>
    <div class="header__nav-item mobile"><a class="header__call mobile" href="tel:+79219312195"><img
                src="<?php bloginfo('template_url'); ?>/assets/img/phone.webp" alt=""></a><a class="header__call mobile" href="https://wa.me/79219312195"><img
                src="<?php bloginfo('template_url'); ?>/assets/img/whatsapp.webp" alt=""></a></div>
</nav>

<section class="about">
    <div class="container">
        <div class="about__inner">
            <h2 class="about__inner-title"><?php the_field('about_title'); ?></h2>
            <div class="about__wrapper">
                <div class="about__inner-text">
                    <p><?php the_field('text_area1'); ?></p>
                    <p><?php the_field('text_area2'); ?></p>
                    <p><?php the_field('text_area3'); ?></p>
                </div>
                <div class="about__img"> <img src="<?php the_field('about_image'); ?>" alt=""></div>
            </div>
            <div class="about__inner-text about__inner-subtext">
                <p><?php the_field('text_area4'); ?></p>
            </div>
            <div class="about__service">
                <div class="about__service-left">
                    <h3 class="about__service-title"><?php the_field('left_column_title'); ?></h3>
                    <ul class="about__list">
                        <li class="about__list-item">
                            <p><?php the_field('l-text_1'); ?></p>
                        </li>
                        <li class="about__list-item">
                            <p><?php the_field('l-text_2'); ?></p>
                        </li>
                        <li class="about__list-item">
                            <p><?php the_field('l-text_3'); ?></p>
                        </li>
                        <li class="about__list-item">
                            <p><?php the_field('l-text_4'); ?></p>
                        </li>
                        <li class="about__list-item">
                            <p><?php the_field('l-text_5'); ?></p>
                        </li>
                        <li class="about__list-item">
                            <p><?php the_field('l-text_6'); ?></p>
                        </li>
                        <li class="about__list-item">
                            <p><?php the_field('l-text_7'); ?></p>
                        </li>
                        <li class="about__list-item">
                            <p><?php the_field('l-text_8'); ?></p>
                        </li>
                    </ul>
                </div>
                <div class="about__service-right">
                    <h3 class="about__service-title"><?php the_field('right_column_title'); ?></h3>
                    <ul class="about__list">
                        <li class="about__list-item">
                            <p><?php the_field('r-text_1'); ?></p>
                        </li>
                        <li class="about__list-item">
                            <p><?php the_field('r-text_2'); ?></p>
                        </li>
                        <li class="about__list-item">
                            <p><?php the_field('r-text_3'); ?></p>
                        </li>
                        <li class="about__list-item">
                            <p><?php the_field('r-text_4'); ?></p>
                        </li>
                        <li class="about__list-item">
                            <p><?php the_field('r-text_5'); ?></p>
                        </li>
                        <li class="about__list-item">
                            <p><?php the_field('r-text_6'); ?></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>