<?php
    $lHeaderInner = array(
        'extraClass' => '',
        'h1' => 'Criação de sites',
        'bg' => '',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elras eu diam eget felis mattis posuere sit amet a mectr.');
    include('parts/layout/l-headerInner.php');
?>

<main class="l-page --inner --service" data-aos="fade-up">
    <?php include('parts/layout/l-navSubInner.php');?>
    <section class="s-defaultSection s-service --intro" id="o-que-e">
        <div class="s-defaultSection__head">
            <div class="u-container">
                <h2 class="u-ta-c">O que é</h2>
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
                    data-maxw-breaks="1140, 810"
                    data-maxw-cols="2, 1"
                    data-cols-init="3">
                    <li>
                        <?php
                        $cCardServiceDetails = array(
                            'icon' => 'media/img/icons/contentPackage/003-advertising.png',
                            'title' => 'Atrair Mais clientes',
                            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur eum excepturi necessitatibus nesciunt nobis pariatur quisquam ratione, reiciendis sapiente tempore!');
                        include('parts/components/c-cardServiceDetails.php');
                        ?>
                    </li>

                    <li>
                        <?php
                        $cCardServiceDetails = array(
                            'icon' => 'media/img/icons/contentPackage/020-laptop.png',
                            'title' => 'Atrair Mais clientes',
                            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur eum excepturi necessitatibus nesciunt nobis pariatur quisquam ratione, reiciendis sapiente tempore!');
                        include('parts/components/c-cardServiceDetails.php');
                        ?>
                    </li>
                    <li>
                        <?php
                        $cCardServiceDetails = array(
                            'icon' => 'media/img/icons/contentPackage/019-language-1.png',
                            'title' => 'Atrair Mais clientes',
                            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur eum excepturi necessitatibus nesciunt nobis pariatur quisquam ratione, reiciendis sapiente tempore!');
                        include('parts/components/c-cardServiceDetails.php');
                        ?>
                    </li>
                    <li>
                        <?php
                        $cCardServiceDetails = array(
                            'icon' => 'media/img/icons/contentPackage/016-eye-contact.png',
                            'title' => 'Atrair Mais clientes',
                            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur eum excepturi necessitatibus nesciunt nobis pariatur quisquam ratione, reiciendis sapiente tempore!');
                        include('parts/components/c-cardServiceDetails.php');
                        ?>
                    </li>
                    <li>
                        <?php
                        $cCardServiceDetails = array(
                            'icon' => 'media/img/icons/contentPackage/010-connectivity.png',
                            'title' => 'Atrair Mais clientes',
                            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur eum excepturi necessitatibus nesciunt nobis pariatur quisquam ratione, reiciendis sapiente tempore!');
                        include('parts/components/c-cardServiceDetails.php');
                        ?>
                    </li>
                    <li>
                        <?php
                        $cCardServiceDetails = array(
                            'icon' => 'media/img/icons/contentPackage/014-call.png',
                            'title' => 'Atrair Mais clientes',
                            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur eum excepturi necessitatibus nesciunt nobis pariatur quisquam ratione, reiciendis sapiente tempore!');
                        include('parts/components/c-cardServiceDetails.php');
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="s-defaultSection s-plans" id="planos">
        <div class="s-defaultSection__head">
            <div class="u-container">
                <h2 class="u-ta-c">Solicite um orçamento</h2>
                <p>Lorem ipsum dolor sit cteturat dipiscing elit. Quisqued sagittis ortor viverra rus, vel sodalesim feugiatis lorme ipsum ectur.</p>
            </div>
        </div>
        <div class="s-defaultSection__content">
            <div class="u-container">
                <div class="s-plans__grid">
                    <div class="c-cardRequireContact">
                        <form action="#" class="c-form" id="formServiceSites">
                            <ul class="c-form__fieldsHero --pad10">
                                <li class="c-form__field u-fw50">
                                    <label for="formServiceSites_nome">Nome *</label>
                                    <input id="formServiceSites_nome" type="text" name="nome" class="field" required>
                                </li>
                                <li class="c-form__field u-fw50">
                                    <label for="formServiceSites_email">E-mail *</label>
                                    <input id="formServiceSites_email" type="email" name="email" class="field" required>
                                </li>
                                <li class="c-form__field u-fw50">
                                    <label for="formServiceSites_telefone">Telefone *</label>
                                    <input id="formServiceSites_telefone" type="tel" class="field foneMask" name="telefone" required>
                                </li>
                                <li class="c-form__field u-fw50">
                                    <label for="formServiceSites_objetivo">Objetivo com o site *</label>
                                    <input id="formServiceSites_objetivo" type="text" name="objetivo" class="field" required>
                                </li>

                                <li class="c-form__field u-fw100">
                                    <label for="formServiceSites_refs">Referências de sites *</label>
                                    <textarea id="formServiceSites_refs" name="refs" class="field" required></textarea>
                                </li>

                                <li class="c-form__field u-fw100 --check --checkbox">
                                    <span class="fakeLabel">Páginas necessárias para o site *</span>
                                    <ul class="checkHero u-dflex u-wrap">
                                        <li>
                                            <label for="formServiceSites_option1">Página inicial</label>
                                            <input type="checkbox" id="formServiceSites_option1">
                                        </li>
                                        <li>
                                            <label for="formServiceSites_option4">Quem somos</label>
                                            <input type="checkbox" id="formServiceSites_option4">
                                        </li>
                                        <li>
                                            <label for="formServiceSites_option2">Serviços / Produtos</label>
                                            <input type="checkbox" id="formServiceSites_option2">
                                        </li>
                                        <li>
                                            <label for="formServiceSites_option3">Notícias</label>
                                            <input type="checkbox" id="formServiceSites_option3">
                                        </li>
                                        <li>
                                            <label for="formServiceSites_option5">Clientes</label>
                                            <input type="checkbox" id="formServiceSites_option5">
                                        </li>
                                        <li>
                                            <label for="formServiceSites_option6">Blog</label>
                                            <input type="checkbox" id="formServiceSites_option6">
                                        </li>
                                        <li>
                                            <label for="formServiceSites_option7">Galeria de fotos</label>
                                            <input type="checkbox" id="formServiceSites_option7">
                                        </li>
                                        <li>
                                            <label for="formServiceSites_option8">Vagas</label>
                                            <input type="checkbox" id="formServiceSites_option8">
                                        </li>
                                        <li>
                                            <label for="formServiceSites_option9">Portifólio</label>
                                            <input type="checkbox" id="formServiceSites_option9">
                                        </li>
                                        <li>
                                            <label for="formServiceSites_option10">Depoimentos</label>
                                            <input type="checkbox" id="formServiceSites_option10">
                                        </li>
                                        <li>
                                            <label for="formServiceSites_option11">Parceiros</label>
                                            <input type="checkbox" id="formServiceSites_option11">
                                        </li>
                                        <li>
                                            <label for="formServiceSites_option12">Representantes</label>
                                            <input type="checkbox" id="formServiceSites_option12">
                                        </li>
                                        <li>
                                            <label for="formServiceSites_option13">Fale Conosco</label>
                                            <input type="checkbox" id="formServiceSites_option13">
                                        </li>
                                        <li>
                                            <label for="formServiceSites_option15">Outras</label>
                                            <input type="checkbox" id="formServiceSites_option15">
                                        </li>
                                    </ul>
                                </li>

                                <li class="c-form__field u-fw35 --check --radio">
                                    <span class="fakeLabel">Precisa de hospedagem? *</span>
                                    <ul class="checkHero u-dflex u-wrap">
                                        <li>
                                            <label for="formServiceSites_host_y">Sim</label>
                                            <input type="radio" id="formServiceSites_host_y" name="formServiceSites_host">
                                        </li>
                                        <li>
                                            <label for="formServiceSites_host_n">Não</label>
                                            <input type="radio" id="formServiceSites_host_n" name="formServiceSites_host">
                                        </li>
                                    </ul>
                                </li>
                                <li class="c-form__field u-fw35 --check --radio">
                                    <span class="fakeLabel">Precisa de Domínio? *</span>
                                    <ul class="checkHero u-dflex u-wrap">
                                        <li>
                                            <label for="formServiceSites_dominio_y">Sim</label>
                                            <input type="radio" id="formServiceSites_dominio_y" name="formServiceSites_dominio">
                                        </li>
                                        <li>
                                            <label for="formServiceSites_dominio_n">Não</label>
                                            <input type="radio" id="formServiceSites_dominio_n" name="formServiceSites_dominio">
                                        </li>
                                    </ul>
                                </li>

                                <li class="c-form__field u-fw100">
                                    <label for="formServiceSites_mensagem">Mensagem Adicional</label>
                                    <textarea id="formServiceSites_mensagem" name="mensagem" class="field" required></textarea>
                                </li>

                                <li class="c-form__field u-fw100 --btn">
                                    <button class="c-btn --primary">Solicitar orçamento</button>
                                </li>
                            </ul>
                        </form>
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
