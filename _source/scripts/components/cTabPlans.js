{
    // swiper
    const tabPlans__swiper = new Swiper('.c-tabPlans__swiper', {
        speed: 400,
        allowTouchMove: false,
    });

    // tabs
    $('.c-tabPlans__tab a').on('click', function(e){
        e.preventDefault();
        // in/active
        $('.c-tabPlans__tab a').removeClass('is-active');
        $(this).addClass('is-active');

        // changeswipers
        let thisHref = $(this).attr('href');
        console.log(thisHref)
        switch (thisHref) {
            case '#6meses':
                tabPlans__swiper.slideTo(0);
                break;
            case '#9meses':
                tabPlans__swiper.slideTo(1);
                break;
            case '#mensal':
                tabPlans__swiper.slideTo(2);
                break;
            default:
                tabPlans__swiper.slideTo(0);
        }
    })
}
