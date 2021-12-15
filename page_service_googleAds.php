<?php
    $lHeaderInner = array(
        'extraClass' => '',
        'h1' => 'Google Ads',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elras eu diam eget felis mattis posuere sit amet a mectr.');
    include('parts/layout/l-headerInner.php');
?>

<main class="l-page --inner --service">
    <div class="l-subNavInner">
        <ul>
            <li><a href="#o-que-e-google-ads">O que é Google Ads</a></li>
            <li><a href="#">O que Oferecemos</a></li>
            <li><a href="#">Planos</a></li>
            <li><a href="#">Perguntas Frequentes</a></li>
            <li><a href="#">Solicitar Contato</a></li>
        </ul>
    </div>
    <section class="s-defaultSection s-service --intro" id="o-que-e-google-ads">
        <div class="s-defaultSection__head">
            <div class="u-container">
                <h2 class="u-ta-c">O que é Google Ads</h2>
            </div>
        </div>
        <div class="s-defaultSection__content">
            <div class="u-container">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed sagittis tortor. Ut tempor viverra purus, vel sodales enim feugiat quis. Vivamus vitae bibendum diam. Quisque varius et urna non ornare.</p>
                <p>Vestibulum sem sapien, tempus ut placerat a, ornare quis ligula. Sed condimentum mi ac vulputate cursus. Sed metus dui, aliquet ac viverra eget, posue.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed sagittis tortor. Ut tempor viverra purus, vel sodales enim feugiat quis. Vivamus vitae bibendum diam. Quisque varius et urna non ornare.</p>
            </div>
        </div>
    </section>
    <section class="s-defaultSection s-service --list" id="o-que-oferecemos">
        <div class="s-defaultSection__head">
            <div class="u-container">
                <h2 class="u-ta-c">O que Oferecemos</h2>
            </div>
        </div>
        <div class="s-defaultSection__content">
            <div class="u-container">
                <ul class="c-responsiveGrid">
                    <li><?php include('parts/components/c-cardServiceDetails.php');?></li>
                    <li><?php include('parts/components/c-cardServiceDetails.php');?></li>
                    <li><?php include('parts/components/c-cardServiceDetails.php');?></li>
                    <li><?php include('parts/components/c-cardServiceDetails.php');?></li>
                    <li><?php include('parts/components/c-cardServiceDetails.php');?></li>
                    <li><?php include('parts/components/c-cardServiceDetails.php');?></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="s-defaultSection s-plans" id="planos">
        <div class="s-defaultSection__head">
            <div class="u-container">
                <h2 class="u-ta-c">Planos</h2>
                <p>Lorem ipsum dolor sit cteturat dipiscing elit. Quisqued sagittis ortor viverra rus, vel sodalesim feugiatis lorme ipsum ectur.</p>
            </div>
        </div>
        <div class="s-defaultSection__content">
            <div class="u-container">
                <div class="s-plans__grid">
                    <div class="c-tabPlans">
                        <ul class="c-tabPlans__tab">
                            <li><a href="#">6 meses</a></li>
                            <li><a href="#">9 meses</a></li>
                            <li><a href="#">Mensal</a></li>
                        </ul>
                        <div class="c-tabPlans__swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <ul class="c-tabPlans__list">
                                        <li><?php include('parts/components/c-cardPlan.php');?></li>
                                        <li><?php include('parts/components/c-cardPlan.php');?></li>
                                        <li><?php include('parts/components/c-cardPlan.php');?></li>
                                    </ul>
                                </div>
                                <div class="swiper-slide">
                                    <ul class="c-tabPlans__list">
                                        <li><?php include('parts/components/c-cardPlan.php');?></li>
                                        <li><?php include('parts/components/c-cardPlan.php');?></li>
                                        <li><?php include('parts/components/c-cardPlan.php');?></li>
                                    </ul>
                                </div>
                                <div class="swiper-slide">
                                    <ul class="c-tabPlans__list">
                                        <li><?php include('parts/components/c-cardPlan.php');?></li>
                                        <li><?php include('parts/components/c-cardPlan.php');?></li>
                                        <li><?php include('parts/components/c-cardPlan.php');?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="s-plans__support">
                    <a href="#" class="c-whatsappCall">
                        <h4>Precisa de Ajuda?</h4>
                        <div class="u-iconWithCaption">
                            <i>icon</i>
                            <span class="caption"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="s-defaultSection s-service --faq" id="perguntas-frequentes">
        <div class="s-defaultSection__head">
            <div class="u-container">
                <h2 class="u-ta-c">Perguntas frequentes</h2>
            </div>
        </div>
        <div class="s-defaultSection__content">
            <div class="u-container">
                <ul class="c-responsiveGrid">
                    <li>
                        <div class="c-toggleList --white">
                            <div class="c-toggleList__header">
                                <span>Quanto devo investir inicialmente no Ads?</span>
                            </div>
                            <div class="c-toggleList__content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi dolores eum facilis impedit laudantium non, quasi ullam ut voluptatem.</p>
                            </div>
                        </div>
                        <div class="c-toggleList --white">
                            <div class="c-toggleList__header">
                                <span>Quanto devo investir inicialmente no Ads?</span>
                            </div>
                            <div class="c-toggleList__content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi dolores eum facilis impedit laudantium non, quasi ullam ut voluptatem.</p>
                            </div>
                        </div>
                        <div class="c-toggleList --white">
                            <div class="c-toggleList__header">
                                <span>Quanto devo investir inicialmente no Ads?</span>
                            </div>
                            <div class="c-toggleList__content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi dolores eum facilis impedit laudantium non, quasi ullam ut voluptatem.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="c-toggleList --white">
                            <div class="c-toggleList__header">
                                <span>Quanto devo investir inicialmente no Ads?</span>
                            </div>
                            <div class="c-toggleList__content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi dolores eum facilis impedit laudantium non, quasi ullam ut voluptatem.</p>
                            </div>
                        </div>
                        <div class="c-toggleList --white">
                            <div class="c-toggleList__header">
                                <span>Quanto devo investir inicialmente no Ads?</span>
                            </div>
                            <div class="c-toggleList__content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi dolores eum facilis impedit laudantium non, quasi ullam ut voluptatem.</p>
                            </div>
                        </div>
                        <div class="c-toggleList --white">
                            <div class="c-toggleList__header">
                                <span>Quanto devo investir inicialmente no Ads?</span>
                            </div>
                            <div class="c-toggleList__content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi dolores eum facilis impedit laudantium non, quasi ullam ut voluptatem.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>
