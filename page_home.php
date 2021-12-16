<?php include("parts/layout/l-headerHome.php");?>

<main class="l-page --home">
    <?php include("parts/sections/s-services.php");?>
    <section class="s-defaultSection s-aboutUs">
        <div class="s-defaultSection__content">
            <div class="u-container">
                <div class="s-aboutUs__picture">
                    <div class="c-featuredPicture">
                        <span class="c-featuredPicture__icon --a">
                            <img src="media/img/assets/brand_symbol_yellow.png" alt="Malta Digital">
                        </span>
                        <span class="c-featuredPicture__icon --b">
                            <img src="media/img/icons/icon_attach.svg" alt="Analytics">
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
                    <?php include('parts/components/c-mainCTAs.php')?>
                </div>
            </div>
        </div>
    </section>
    <?php include("parts/sections/s-featuredBlogPosts.php");?>
</main>
<?php include("parts/sections/s-clients.php");?>



