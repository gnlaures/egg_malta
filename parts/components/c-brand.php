<?php
    if($cBrand["brandModifier"] === 'symbol') {
        $cBrand['brandPath'] = 'media/img/assets/brand_symbol_yellow.png';
    } else {
        $cBrand['brandPath'] = 'media/img/assets/brand.png';
    }
?>

<div class="c-brand">
    <a href="<?php echo $cBrand["url"] ?>" title="Malta Digital">
        <img src="<?php echo $cBrand["brandPath"] ?>" alt="Malta Digital">
    </a>
</div>
