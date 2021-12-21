<?php
//    $cCardPlan = array(
//        'title' => 'media/img/icons/contentPackage/003-advertising.png',
//        'price' => 'Atrair Mais clientes',
//        'cents' => 'Atrair Mais clientes',
//        'cents' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur eum excepturi necessitatibus nesciunt nobis pariatur quisquam ratione, reiciendis sapiente tempore!');
?>

<div class="c-cardPlan">
    <div class="c-cardPlan__title">
        <h3><?php echo $cCardPlan["title"] ?></h3>
        <hr>
    </div>
    <div class="c-cardPlan__price">
        <div class="price__hero">
            <span class="b">R$</span>
            <span class="p"><?php echo $cCardPlan["price"] ?></span>
            <span class="z"><?php echo $cCardPlan["cents"] ?></span>
            <span class="m">/mensal</span>
        </div>
    </div>
    <div class="c-cardPlan__caption">
        <p><?php echo $cCardPlan["text"] ?></p>
    </div>
    <div class="c-cardPlan__footer">
        <a href="contratar" class="c-btn --primary">Contratar</a>
        <span>* contrato mínimo de 6 meses</span>
    </div>
</div>
