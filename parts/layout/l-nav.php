<nav class="l-nav">
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
                <ul class="c-mainCTAs">
                    <li><a href="#" class="c-btn --primary --stroke --icon">(48)99999.9999</a></li>
                    <li><a href="servicos" class="c-btn --primary">Conheça os serviços</a></li>
                </ul>
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
