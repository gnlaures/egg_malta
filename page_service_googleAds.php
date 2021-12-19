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
                <ul class="c-responsiveGrid --center"
                    data-maxw-breaks="980, 400"
                    data-maxw-cols="2, 1"
                    data-cols-init="3">
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
                            <li><a href="#6meses" class="is-active">6 meses</a></li>
                            <li><a href="#9meses">9 meses</a></li>
                            <li><a href="#mensal">Mensal</a></li>
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
                        <div>
                            <i><img src="media/img/icons/social/social_whatsapp.svg" alt="Whatsapp"></i>
                            <span class="caption">48 99999.9999</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="u-dnone s-plans__form">
            <div class="c-formContract">
                <form action="#" class="c-form" id="formContract">
                    <ul class="c-form__fieldsHero --pad10">
                        <li class="c-form__field u-fw50">
                            <label for="formContract_nome">Nome</label>
                            <input id="formContract_nome" type="text" name="nome" class="field" required>
                        </li>
                        <li class="c-form__field u-fw50">
                            <label for="formContract_email">E-mail</label>
                            <input id="formContract_email" type="email" name="email" class="field" required>
                        </li>
                        <li class="c-form__field u-fw50">
                            <label for="formContract_telefone">Telefone</label>
                            <input id="formContract_telefone" type="tel" class="field foneMask" name="telefone" placeholder="(__) ____-_____" required>
                        </li>
                        <li class="c-form__field u-fw50">
                            cnpj
                        </li>
                        <li class="c-form__field u-fw50">
                            empresa
                        </li>
                        <li class="c-form__field u-fw50">
                            servicos
                        </li>
                        <li class="c-form__field u-fw100">
                            <label for="formContract_mensagem">Mensagem</label>
                            <textarea id="formContract_mensagem" name="mensagem" class="field" required></textarea>
                        </li>
                        <li class="c-form__field u-fw100 --btn">
                            <button class="c-btn --primary">Contratar Serviços</button>
                        </li>
                    </ul>
                </form>

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
                <ul class="c-responsiveGrid --center"
                    data-maxw-breaks="980"
                    data-maxw-cols="1"
                    data-cols-init="2">
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
