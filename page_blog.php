<?php
$lHeaderInner = array(
    'extraClass' => '',
    'h1' => 'Blog',
    'bg' => 'media/img/content/bg_headerInner_contact.jpg',
    'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elras eu diam eget felis mattis posuere sit amet a mectr.');
include('parts/layout/l-headerInner.php');
?>

<main class="l-page --inner --blog" data-aos="fade-up">
    <section class="s-defaultAsideSection s-blogPosts">
        <div class="u-container">
            <div class="s-defaultAsideSection__content">
                <ul class="s-blogPosts__articles">
                    <li><?php $cCardBlogResume = array(
                            'url' => 'bloginner',
                            'img' => 'media/img/content/content_1.jpg',
                            'title' => 'Preciso ter muito dinheiro para investir em Google Ads?',
                            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet aperiam harum ipsa minus molestiae nesciunt',
                            'author' => 'John Doe',
                            'date' => '10/10/2021');
                        include('parts/components/c-cardBlogResume.php'); ?></li>
                    <li><?php $cCardBlogResume = array(
                            'url' => 'bloginner',
                            'img' => 'media/img/content/content_2.jpg',
                            'title' => 'Preciso ter muito dinheiro para investir em Google Ads?',
                            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet aperiam harum ipsa minus molestiae nesciunt',
                            'author' => 'John Doe',
                            'date' => '10/10/2021');
                        include('parts/components/c-cardBlogResume.php'); ?></li>
                    <li><?php $cCardBlogResume = array(
                            'url' => 'bloginner',
                            'img' => 'media/img/content/content_3.jpg',
                            'title' => 'Preciso ter muito dinheiro para investir em Google Ads?',
                            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet aperiam harum ipsa minus molestiae nesciunt',
                            'author' => 'John Doe',
                            'date' => '10/10/2021');
                        include('parts/components/c-cardBlogResume.php'); ?></li>
                </ul>
                <div class="s-blogPosts__pagination">
                    <ul class="c-pagination">
                        <li><a href="#" class="text is-disabled">Anterior</a></li>
                        <li><a href="#" class="num is-active">01</a></li>
                        <li><a href="#" class="num">02</a></li>
                        <li><a href="#" class="num">03</a></li>
                        <li><a href="#" class="text">Próximo</a></li>
                    </ul>
                </div>
            </div>
            <div class="s-defaultAsideSection__aside">
                <?php include("parts/layout/l-blogAside.php");?>
            </div>
        </div>
    </section>
</main>
<?php include("parts/sections/s-clients.php");?>
