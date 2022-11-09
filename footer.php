<footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__item">
                    <h2 class="footer__item-title">Наши услуги:</h2>
                    <ul class="footer__item-wrapper">
                        <li class="footer__item-service"> <a href="slider-item1.html"><?php the_field('service1', 74); ?></a></li>
                        <li class="footer__item-service"> <a href="slider-item2.html"><?php the_field('service2', 74); ?></a></li>
                        <li class="footer__item-service"> <a href="slider-item3.html"><?php the_field('service3', 74); ?></a></li>
                        <li class="footer__item-service"> <a href="slider-item4.html"><?php the_field('service4', 74); ?></a></li>
                        <li class="footer__item-service"> <a href="slider-item5.html"><?php the_field('service5', 74); ?></a></li>
                    </ul>
                </div>
                <div class="footer__item">
                    <h2 class="footer__item-title">Адреса:</h2>
                    <ul class="footer__item-wrapper">
                        <li class="footer__item-phone">
                            <h3 class="footer__item-adress"><?php the_field('addr1', 74); ?></h3>
                            <div class="footer__item-number"><a href="tel:+78129312195"><?php the_field('addr1_tel1', 74); ?></a><a
                                    href="tel:+78124956569"><?php the_field('addr1_tel2', 74); ?></a></div>
                        </li>
                        <li class="footer__item-phone">
                            <h3 class="footer__item-adress"><?php the_field('addr2', 74); ?></h3>
                            <div class="footer__item-number"><a href="tel:+78129524269"><?php the_field('addr2_tel1', 74); ?></a><a
                                    href="tel:+79219524269"><?php the_field('addr2_tel2', 74); ?></a></div>
                        </li>
                    </ul>
                </div>
                <div class="footer__item">
                    <h2 class="footer__item-title">Клиника:</h2>
                    <ul class="footer__item-wrapper">
                        <li class="footer__item-service"> <a href="about.html"><?php the_field('about_clinick', 74); ?></a><a
                                href="article.html"><?php the_field('articles', 74); ?>  </a><a href="price.html"><?php the_field('price', 74); ?></a></li>
                    </ul>
                    <div class="footer__item-title">
                        <p>Почта:</p><a href="mailto:Vetclinica-efimova@yandex.ru">Vetclinica-efimova@yandex.ru</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>