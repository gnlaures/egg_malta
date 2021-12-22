<nav class="l-nav" data-aos="fade-down">
    <div class="l-nav__main">
        <div class="u-container">
            <div class="l-nav__brand">
                <?php $cBrand = array('brandModifier' => '', 'url' => 'home');
                include('parts/components/c-brand.php'); ?>
            </div>
            <div class="l-nav__menu">
                <?php $cMainMenu = array('extraClass' => '--secondary --forceMainCaretWhite --forceMainLinkColorWhite');
                include('parts/components/c-mainMenu.php'); ?>
            </div>
            <div class="l-nav__ctas">
                <?php
                $cMainCTA = array(
                    'url_1' => '#',
                    'class_1' => '--primary --stroke',
                    'caption_1' => '(48)99999.9999',
                    'url_2' => 'servicos',
                    'class_2' => '--primary',
                    'caption_2' => 'Conheça os serviços');
                include('parts/components/c-mainCTAs.php');
                ?>
            </div>
            <div class="l-nav__hamburguer">
                <?php $cHamburguer = array('extraClass' => '--primary --bold --rounded js-openNavMobile');
                include('parts/components/c-hamburguer.php'); ?>
            </div>
        </div>
    </div>
</nav>

<div class="l-navMobile">
    <div class="l-navMobile__mask js-closeNavMobile"></div>
    <div class="l-navMobile__content --right">
        <div class="l-navMobile__close">
            <?php $cHamburguer = array('extraClass' => '--primary --bold --rounded js-closeNavMobile is-active');
            include('parts/components/c-hamburguer.php'); ?>
        </div>
        <div class="l-navMobile__hero">
            <?php $cMainMenu = array('extraClass' => '--primary --vertical --click');
            include('parts/components/c-mainMenu.php'); ?>
        </div>
    </div>
</div>
