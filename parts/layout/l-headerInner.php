<?php
//    $lHeaderInner = array(
//        'extraClass' => '',
//        'h1' => 'A Agência',
//        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elras eu diam eget felis mattis posuere sit amet a mectr.');
//    ?>

<header class="l-headerInner <?php echo $lHeaderInner["extraClass"] ?>">
    <div class="l-headerInner__bg" style="background: url('<?php echo $lHeaderInner["bg"] ?>')"></div>
    <div class="l-headerInner__content" data-aos="zoom-in-up">
        <div class="u-container">
            <h1><?php echo $lHeaderInner["h1"] ?></h1>
            <p><?php echo $lHeaderInner["text"] ?></p>
        </div>
    </div>
</header>
