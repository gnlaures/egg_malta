{
    if ($('.c-toggleList').length) {
        $('.c-toggleList__header').on('click', function() {
            $(this).parent().toggleClass('is-active');
        });
    }
}
