<?php
$lHeaderInner = array(
    'extraClass' => '',
    'h1' => 'Contato',
    'bg' => 'media/img/content/bg_headerInner_contact.jpg',
    'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elras eu diam eget felis mattis posuere sit amet a mectr.');
include('parts/layout/l-headerInner.php');
?>

<main class="l-page --inner --contact">
    <section class="s-defaultSection s-contact">
        <div class="s-defaultSection__content">
            <div class="u-container">
                <div class="s-contact__form">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur esse et facere minima molestiae nobis omnis sapiente sequi soluta suscipit?</p>
                    <?php
                        include('parts/components/c-contactForm.php');
                    ?>
                </div>
                <div class="s-contact__infos">
                    <?php
                        $cSocialList = array('extraClass' => '--primary --rounded');
                        include('parts/components/c-socialList.php');
                        include('parts/components/c-contactInfos.php');
                        include('parts/components/c-contactMap.php');
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include("parts/sections/s-clients.php");?>

