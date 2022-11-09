<?php get_header(); ?>

    <nav class="header__nav-mobile">
        <div class="header__nav-item"> <a href="index.html">Главная</a></div>
        <div class="header__nav-item"><a href="about/">О клинике</a></div>
        <div class="header__nav-item"><a href="article.html">Cтатьи Ефимова А.Н</a></div>
        <div class="header__nav-item"><a href="price/">Прайс-лист</a></div>
        <div class="header__nav-item">
            <p>Наши услуги:</p>
        </div>
        <div class="header__nav-item"><a href="slider-item1.html">Ортопедия</a></div>
        <div class="header__nav-item"><a href="slider-item2.html">Хирургия</a></div>
        <div class="header__nav-item"><a href="slider-item3.html">Дерматология</a></div>
        <div class="header__nav-item"><a href="slider-item4.html">Диагностика</a></div>
        <div class="header__nav-item"><a href="slider-item5.html">Терапия</a></div>



        <div class="header__nav-item mobile"><a class="header__call mobile" href="tel:+79219312195"><img
                    src="img/phone.webp" alt=""></a><a class="header__call mobile" href="https://wa.me/79219312195"><img
                    src="img/whatsapp.webp" alt=""></a></div>
    </nav>
    
    <!-- image changer -->
    <style>
        .promo {
            background: url('<?php the_field('bg'); ?>') center center/cover no-repeat;
        }
        @media screen and (max-width: 576px) {
            .promo {
                background: url('<?php the_field('bg_xs'); ?>') center center/cover no-repeat;
            }
        }
    </style>
    <!-- image changer close -->

    <section class="promo">
        <div class="container">
            <div class="promo__inner">
                <div class="promo__wrapper">
                    <h1 class="promo__title"><?php the_field('main_title')?> </h1><a class="promo__btn"
                        href="about.html"><?php the_field('button_text')?></a>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="services__inner">
                <div class="services__title"><?php the_field('service_main-title'); ?></div>
                <div class="services__slider-wrapper">

                    <div class="services__slider"> 
                        <!-- карточка 1 -->
                        <a class="services__slider-item" href="slider-item1.html">
                            <?php
                            $service_inner1 = get_field('service_inner1');	
                            
                            if( $service_inner1 ): ?>
                                <div class="services__container">
                                    <div class="services__slider-img"> <img src="<?php echo $service_inner1['service_inner-img']; ?>" alt=""></div>
                                    <div class="services__slider-title">
                                        <h2><?php echo $service_inner1['service_inner-title']; ?></h2>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </a>
                        <!-- карточка 2 -->
                        <a class="services__slider-item" href="slider-item2.html">
                            <?php
                            $service_inner2 = get_field('service_inner2');	
                            
                            if( $service_inner2 ): ?>
                                <div class="services__container">
                                    <div class="services__slider-img"> <img src="<?php echo $service_inner2['service_inner-img']; ?>" alt=""></div>
                                    <div class="services__slider-title">
                                        <h2><?php echo $service_inner2['service_inner-title']; ?></h2>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </a>
                        <!-- карточка 3 -->
                        <a class="services__slider-item" href="slider-item3.html">
                            <?php
                            $service_inner3 = get_field('service_inner3');	
                            
                            if( $service_inner3 ): ?>
                                <div class="services__container">
                                    <div class="services__slider-img"> <img src="<?php echo $service_inner3['service_inner-img']; ?>" alt=""></div>
                                    <div class="services__slider-title">
                                        <h2><?php echo $service_inner3['service_inner-title']; ?></h2>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </a>
                        <!-- карточка 4 -->
                        <a class="services__slider-item" href="slider-item4.html">
                            <?php
                            $service_inner4 = get_field('service_inner4');	
                            
                            if( $service_inner4 ): ?>
                                <div class="services__container">
                                    <div class="services__slider-img"> <img src="<?php echo $service_inner4['service_inner-img']; ?>" alt=""></div>
                                    <div class="services__slider-title">
                                        <h2><?php echo $service_inner4['service_inner-title']; ?></h2>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </a>
                        <!-- карточка 5 -->
                        <a class="services__slider-item" href="slider-item5.html">
                            <?php
                            $service_inner5 = get_field('service_inner5');	
                            
                            if( $service_inner5 ): ?>
                                <div class="services__container">
                                    <div class="services__slider-img"> <img src="<?php echo $service_inner5['service_inner-img']; ?>" alt=""></div>
                                    <div class="services__slider-title">
                                        <h2><?php echo $service_inner5['service_inner-title']; ?></h2>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="map__section">
        <div class="container">
            <div class="map__section-title services__title">Как нас найти</div>
            <div class="map__section-inner">


                <div id="map1" class="map_1 map active animate__animated animate__fadeInLeft"></div>
                <div id="map2" class="map_2 map animate__animated animate__fadeInRight"></div>


                <div class="map__section-wrapper">
                    <div class="toggler1 map__section-toggler">
                        <h2 class="map__section-addr"><?php the_field('left_addr'); ?></h2>

                        <div class="map__section-tel">
                            <a href="tel:+78129312195"><?php the_field('left_phone_1'); ?></a>
                            
                            <a href="tel:+78124956569"><?php the_field('left_phone_2'); ?></a>
                        </div>
                    </div>

                    <div class="toggler2 map__section-toggler">
                        <h2 class="map__section-addr"><?php the_field('right_addr'); ?></h2>

                        <div class="map__section-tel">
                            <a href="tel:+78129524269"><?php the_field('right_phone_1'); ?></a>
                            
                            <a href="tel:+79219524269"><?php the_field('right_phone_2'); ?></a>
                        </div>
                    </div>
                </div>
                
            </div> 
        </div>
    </section>

<?php get_footer(); ?>