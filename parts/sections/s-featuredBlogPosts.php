<section class="s-defaultSection s-featuredBlogPosts" data-aos="fade-up">
    <div class="s-defaultSection__head --withLink">
        <div class="u-container">
            <h2 class="u-ta-r">Lorem ipsum sit dollor consectur blog articles</h2>
            <a href="bloginner" class="c-linkReadMore">
                <span class="caption">Veja mais publicações</span>
                <i class="icon">
                    <img src="media/img/assets/caret_secondary_right.png">
                </i>
            </a>
        </div>
    </div>
    <div class="s-defaultSection__content">
        <div class="u-container">
            <ul class="c-responsiveGrid --start"
                data-maxw-breaks="980, 400"
                data-maxw-cols="2, 1"
                data-cols-init="3">
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
                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet aperiam consequatur explicabo harum ipsa minus molestiae nesciunt',
                        'author' => 'John Doe',
                        'date' => '10/10/2021');
                    include('parts/components/c-cardBlogResume.php'); ?></li>
                <li><?php $cCardBlogResume = array(
                        'url' => 'bloginner',
                        'img' => 'media/img/content/content_3.jpg',
                        'title' => 'Preciso ter muito dinheiro para investir em Google Ads?',
                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet aperiam.',
                        'author' => 'John Doe',
                        'date' => '10/10/2021');
                    include('parts/components/c-cardBlogResume.php'); ?></li>
            </ul>
        </div>
    </div>
</section>
