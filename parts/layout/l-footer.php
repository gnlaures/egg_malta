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
                <ul class="c-mainCTAs">
                    <li><a href="#" class="c-btn --white --stroke --icon">(48)99999.9999</a></li>
                    <li><a href="#" class="c-btn --primary">Conheça os serviços</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="l-footer__copyright">
        <div class="u-container">
            <span class="reserved">© 2021 Malta Digital. Todos os direitos reservados</span>
            <a href="#" class="by">by <span>Egg Criativo</span></a>
        </div>
    </div>
</footer>
