<?php
//    $cCardService = array(
//        'url' => '',
//        'icon' => 'A Agência',
//        'title' => 'Gestão de mídias sociais',
//        'btnCaption' => 'A Agência',
//        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elras eu diam eget felis mattis posuere sit amet a mectr.');
    ?>

<a href="<?php echo $cCardService["url"] ?>" class="c-cardService">
    <div class="c-cardService__icon"><img src="<?php echo $cCardService["icon"] ?>" alt="Icon"></div>
    <div class="c-cardService__title"><h3><?php echo $cCardService["title"] ?></h3></div>
    <hr>
    <div class="c-cardService__text">
        <p><?php echo $cCardService["text"] ?></p>
    </div>
    <div class="c-cardService__btn">
        <span class="c-btn --primary"><?php echo $cCardService["btnCaption"] ?></span>
    </div>
</a>
