<?php
//    $cCardServiceDetails = array(
//        'icon' => 'media/img/icons/contentPackage/003-advertising.png',
//        'title' => 'Atrair Mais clientes',
//        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur eum excepturi necessitatibus nesciunt nobis pariatur quisquam ratione, reiciendis sapiente tempore!');
?>

<div class="c-cardServiceDetails">
    <div class="c-cardServiceDetails__icon">
        <img src="<?php echo $cCardServiceDetails["icon"] ?>">
    </div>
    <div class="c-cardServiceDetails__content">
        <h4><?php echo $cCardServiceDetails["title"] ?></h4>
        <p><?php echo $cCardServiceDetails["text"] ?></p>
    </div>
</div>
