<div class="c-favoriteToggle <?php echo $cFavoriteToggle["extraClass"] ?>">
    <div class="c-favoriteToggle__icon --stroke">
        <?php include('media/img/boilerplate/icon_heart.svg')?>
    </div>
    <div class="c-favoriteToggle__icon --fill">
        <?php include('media/img/boilerplate/icon_heart_active.svg')?>
    </div>
    <div class="c-favoriteToggle__count"><?php echo $cFavoriteToggle["initValue"] ?></div>
</div>