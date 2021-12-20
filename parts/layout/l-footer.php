<footer class="l-footer">
    <div class="l-footer__hero">
        <div class="u-container">
            <div class="l-footer__menu">
                <?php $cMainMenu = array('extraClass' => '--white --click --openInTop');
                include('parts/components/c-mainMenu.php'); ?>
            </div>
            <div class="l-footer__brand">
                <?php $cBrand = array('brandModifier' => 'symbol', 'url' => 'home');
                include('parts/components/c-brand.php'); ?>
            </div>
            <div class="l-footer__ctas">
                <?php
                $cMainCTA = array(
                    'url_1' => '#',
                    'class_1' => '--white --stroke',
                    'caption_1' => '(48)99999.9999',
                    'url_2' => '#servicos',
                    'class_2' => '--primary',
                    'caption_2' => 'Conheça os serviços');
                include('parts/components/c-mainCTAs.php');
                ?>
            </div>
        </div>
    </div>
    <div class="l-footer__copyright">
        <div class="u-container">
            <span class="reserved">© 2021 Malta Digital. Todos os direitos reservados</span>
            <span class="by">by <a href="https://www.instagram.com/eggcriativo"><span>Egg Criativo</span></a></span>
        </div>
    </div>
</footer>
