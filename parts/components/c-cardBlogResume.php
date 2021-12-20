<a href="<?php echo $cCardBlogResume["url"] ?>" class="c-cardBlogResume">
    <figure class="c-cardBlogResume__picture">
        <img src="<?php echo $cCardBlogResume["img"] ?>" alt="<?php echo $cCardBlogResume["title"] ?>">
    </figure>
    <div class="c-cardBlogResume__content">
        <hr>
        <div class="authorAndDate">Publicado por <strong><?php echo $cCardBlogResume["author"] ?></strong> em <?php echo $cCardBlogResume["date"] ?>.</div>
        <h3><?php echo $cCardBlogResume["title"] ?></h3>
        <p><?php echo $cCardBlogResume["text"] ?></p>
    </div>
</a>
