<header class="l-headerHome">
    <div class="js-swiperHeaderHome swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="l-headerHome__content">
                    <div class="u-container">
                        <h1 data-aos="zoom-in-up">Somos especialistas em marketing digital, SEO e Google Ads.</h1>
                        <p data-aos="zoom-in-up">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis doloremque et fugit iste iusto labore laboriosam!</p>
                        <div data-aos="zoom-in-up" data-aos-delay="200">
                            <?php
                            $cMainCTA = array(
                                'url_1' => 'google-ads',
                                'class_1' => '--primary',
                                'caption_1' => 'Saiba mais',
                                'url_2' => '#solicitar-contato',
                                'class_2' => '--primary --white js-scrollLink',
                                'caption_2' => 'Solicite Contato');
                            include('parts/components/c-mainCTAs.php');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <a href="#malta" class="c-linkScroll js-scrollLink">
        <img src="media/img/assets/caret_secondary_down.png">
    </a>
</header>
