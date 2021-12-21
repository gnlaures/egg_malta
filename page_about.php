<?php
$lHeaderInner = array(
    'extraClass' => '',
    'h1' => 'A Agência',
    'bg' => 'media/img/content/bg_headerInner_contact.jpg',
    'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elras eu diam eget felis mattis posuere sit amet a mectr.');
include('parts/layout/l-headerInner.php');
?>

<main class="l-page --inner --about">
    <section class="s-defaultSection s-aboutUs">
        <div class="s-defaultSection__content">
            <div class="u-container">
                <div class="s-aboutUs__picture">
                    <div class="c-featuredPicture">
                        <span class="c-featuredPicture__icon --a">
                            <img src="media/img/assets/brand_symbol_yellow.png" alt="Malta Digital">
                        </span>
                        <span class="c-featuredPicture__icon --b">
                            <img src="media/img/icons/icon_google.png" alt="Analytics">
                        </span>
                        <span class="c-featuredPicture__bgEffect"></span>
                        <figure class="c-featuredPicture__img">
                            <img src="media/img/content/content_1.jpg" alt="About Malta">
                        </figure>
                    </div>
                </div>
                <div class="s-aboutUs__content">
                    <h2>Consectur adiscpling about text Malta</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed sagittis tortor. Ut tempor viverra purus, vel sodales enim feugiat quis. Vivamus vitae bibendum diam. Quisque varius et urna non ornare.</p>
                    <p>Vestibulum sem sapien, tempus ut placerat a, ornare quis ligula. Sed condimentum mi ac vulputate cursus. Sed metus dui, aliquet ac viverra eget, posue.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed sagittis tortor. Ut tempor viverra purus, vel sodales enim feugiat quis. Vivamus vitae bibendum diam. Quisque varius et urna non ornare.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="s-defaultSection s-aboutUs --reverse">
        <div class="s-defaultSection__content">
            <div class="u-container">
                <div class="s-aboutUs__picture">
                    <div class="c-featuredPicture --bgTop">
                        <span class="c-featuredPicture__icon --a">
                            <img src="media/img/assets/brand_symbol_yellow.png" alt="Malta Digital">
                        </span>
                        <span class="c-featuredPicture__bgEffect"></span>
                        <figure class="c-featuredPicture__img">
                            <img src="media/img/content/content_1.jpg" alt="About Malta">
                        </figure>
                    </div>
                </div>
                <div class="s-aboutUs__content">
                    <h2>Consectur adiscpling about text Malta</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed sagittis tortor. Ut tempor viverra purus, vel sodales enim feugiat quis. Vivamus vitae bibendum diam. Quisque varius et urna non ornare.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed sagittis tortor. Ut tempor viverra purus, vel sodales enim feugiat diam. Quisque varius et urna non ornare.</p>
                </div>
            </div>
        </div>
    </section>
    <?php include("parts/sections/s-certificatesAndNumbers.php");?>
</main>

